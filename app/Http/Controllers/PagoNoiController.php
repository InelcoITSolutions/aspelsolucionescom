<?php

namespace aspelsoluciones\Http\Controllers;

use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PagoNoiController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf        = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    /* public function store(Request $request)
    {

    $new_cliente = new DatosFiscalesCliente;

    $v = \Validator::make($request->all(), [
    'razon_social'       => 'required|max:255',
    'rfc'                => 'required|unique:datos_fiscales_clientes',
    'nombre_comercial'   => 'required|max:255',
    'contribuyente'      => 'required',
    'calle'              => 'required',
    'no_exterior'        => 'required',
    'no_interior'        => 'required',
    'colonia'            => 'required',
    'ciudad'             => 'required',
    'cp'                 => 'required',
    'pais'               => 'required',
    'estado'             => 'required',
    'telefono'           => 'required',
    'correo_facturacion' => 'required',
    'nombre_apellidos'   => 'required',
    'correo'             => 'required|email',

    ]);

    if ($v->fails()) {
    return redirect('presentacion/nuevo-noi#registrarme')
    ->withErrors($v->errors());
    }

    $new_cliente->create([
    'nombre'     => $request['nombre'],
    'correo'     => $request['correo'],
    'telefono'   => $request['telefono'],
    'empresa'    => $request['empresa'],
    'interesado' => $request['interesado'],

    ]);
    }*/
    public function postPayment()
    {
        $cliente = new Payer();
        $cliente->setPaymentMethod('paypal');

        $items    = array();
        $subtotal = 0;
        $iva      = 0;
        $carrito  = \Session::get('carrito');
        $moneda   = 'MXN';

        foreach ($carrito as $producto) {
            $item = new Item();
            $item->setName($producto->nombre_producto)
                ->setCurrency($moneda)
                ->setDescription($producto->tipo)
                ->setPrice($producto->Cantidad)
                ->setPrice($producto->precio_servicio)
                ->setPrice($producto->precio);

            $items[] = $item;
            $subtotal += $producto->precio + $producto->precio_servicio + $producto->Cantidad;
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $iva += $subtotal * .16;
        $mas_iva = new Details();
        $mas_iva->setSubtotal($subtotal)->setTax($iva);

        $total = $subtotal + $iva;

        $monto_total = new Amount();
        $monto_total->setCurrency($moneda)
            ->setTotal($total)
            ->setDetails($mas_iva);

        $transaccion = new Transaction();
        $transaccion->setAmount($monto_total)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payments.status'))
            ->setCancelUrl(\URL::route('payments.status'));

        $pago = new Payment();
        $pago->setIntent('Sale')
            ->setPayer($cliente)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaccion));

        try {
            $pago->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach ($pago->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add cliente ID to session
        \Session::put('paypal_payment_id', $pago->getId());

        if (isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return \Redirect::route('promo-noi')
            ->with('mensaje', 'Ups! Error desconocido.');

    }

    public function getPaymentStatus()
    {
        // Get the cliente ID before session clear
        $pago_id = \Session::get('paypal_payment_id');

        // clear the session cliente ID
        \Session::forget('paypal_payment_id');

        $clienteId = Input::get('PayerID');
        $token     = Input::get('token');

        if (empty($clienteId) || empty($token)) {
            return redirect('productos-aspel')
                ->with('mensaje', 'Hubo un problema al intentar pagar con Paypal');
        }

        $pago = Payment::get($pago_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        $resultado = $pago->execute($execution, $this->_api_context);

        if ($resultado->getState() == 'approved') {

            return redirect('promo-noi')
                ->with('mensaje', 'Compra realizada de forma correcta');
        }
        return redirect('promo-noi')
            ->with('mensaje', 'La compra fue cancelada');
    }
}
