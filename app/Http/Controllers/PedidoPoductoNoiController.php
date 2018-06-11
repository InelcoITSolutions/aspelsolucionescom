<?php

namespace aspelsoluciones\Http\Controllers;

use aspelsoluciones\Cliente;
use aspelsoluciones\OrdenCompra;
use aspelsoluciones\ProductosNuevo;
use Illuminate\Http\Request;
use Mail;

class PedidoPoductoNoiController extends Controller
{
    public function __construct()
    {

        if (!\Session::has('pedido')) {
            \Session::put('pedido', array());
        }

        if (!\Session::has('cliente')) {
            \Session::put('cliente', array());
        }

    }
    // Mostrar pedido

    public function show()
    {
        $pedido   = \Session::get('pedido');
        $subtotal = $this->subtotal();
        $iva      = $this->iva();
        $total    = $this->total();

        return view('templates.landings.tres-promociones.pedido-noi', compact('pedido', 'subtotal', 'iva', 'total'));

    }
    // Añadir promo noi

    public function add(ProductosNuevo $productsnoi)
    {
        $pedido                       = \Session::get('pedido');
        $productsnoi->Cantidad        = 1;
        $productsnoi->cantidad_users  = 0;
        $productsnoi->precio_servicio = 0;

        $pedido[$productsnoi->tipo] = $productsnoi;
        \Session::put('pedido', $pedido);

        return redirect()->route('mostrar-pedido');

    }
    // Borrar articulo

    public function delete(ProductosNuevo $productsnoi)
    {
        $pedido = \Session::get('pedido');
        unset($pedido[$productsnoi->tipo]);
        \Session::put('pedido', $pedido);
        return redirect()->route('mostrar-pedido');
    }

    // Agregar usuarios adicionales
    public function user_add(ProductosNuevo $productsnoi, $cantidad_users)
    {
        $pedido                                     = \Session::get('pedido');
        $pedido[$productsnoi->tipo]->precio_users   = $cantidad_users;
        $pedido[$productsnoi->tipo]->cantidad_users = $cantidad_users;

        switch ($cantidad_users) {

            case '1':
                $precio_users = $productsnoi->precio_mas1usuario;
                break;
            case '2':
                $precio_users = $productsnoi->precio_mas2usuario;
                break;
            case '3':
                $precio_users = $productsnoi->precio_mas3usuario;
                break;
            case '4':
                $precio_users = $productsnoi->precio_mas4usuario;
                break;
            case '5':
                $precio_users = $productsnoi->precio_mas5usuario;
                break;

            default:
                $precio_users = 0;
                break;
        }

        if ($cantidad_users <= 0) {
            $precio_users    = 0;
            $cantidad_users  = 0;
            $precio_servicio = 300;

        } elseif ($cantidad_users > 5) {
            $precio_users   = 0;
            $cantidad_users = 0;

        }
        $pedido[$productsnoi->tipo]->precio_users   = $precio_users;
        $pedido[$productsnoi->tipo]->cantidad_users = $cantidad_users;

        if ($pedido[$productsnoi->tipo]->precio_servicio != 0) {
            $this->service($productsnoi, $cantidad_users);
        }

        \Session::put('pedido', $pedido);
        return redirect()->route('mostrar-pedido');
    }

    // Borrar usuarios-adicionales
    public function delete_user(ProductosNuevo $productsnoi)
    {
        $pedido = \Session::get('pedido');
        unset($pedido[$productsnoi->tipo]->precio_users);
        $pedido[$productsnoi->tipo]->cantidad_users  = 0;
        $pedido[$productsnoi->tipo]->precio_servicio = 300;

        \Session::put('pedido', $pedido);
        return redirect()->route('mostrar-pedido');
    }

    // Agregar servicios
    public function service(ProductosNuevo $productsnoi, $cantidad_users)
    {
        $pedido = \Session::get('pedido');

        $pedido[$productsnoi->tipo]->cantidad_users = $cantidad_users;

        $precio_servicio = 300;

        $cantidad_users + 1;
        $precio_servicio = $precio_servicio + ($precio_servicio * $cantidad_users);
        if ($cantidad_users < 0 || $cantidad_users > 5) {
            $precio_servicio = 0;
        } elseif ($cantidad_users <= 0 && $productsnoi->Cantidad = 1) {
            $precio_servicio = 300;
        }

        $pedido[$productsnoi->tipo]->precio_servicio = $precio_servicio;
        //return $cantidad_service;
        \Session::put('pedido', $pedido);
        return redirect()->route('mostrar-pedido');
    }

    public function delete_service(ProductosNuevo $productsnoi)
    {
        $pedido = \Session::get('pedido');
        unset($pedido[$productsnoi->tipo]->precio_servicio);
        \Session::put('pedido', $pedido);
        return redirect()->route('mostrar-pedido');
    }
    // Cancelar compra
    public function trash()
    {
        \Session::forget('pedido');
        return redirect('nuevo-noi');
        return redirect()->back();

    }

    // subtotal de la compra
    public function subtotal()
    {
        $pedido   = \Session::get('pedido');
        $subtotal = 0;
        foreach ($pedido as $item) {
            $subtotal += $item->precio + $item->precio_users + $item->precio_servicio;
        }
        return $subtotal;
    }
    // iva de la compra
    public function iva()
    {
        $pedido   = \Session::get('pedido');
        $subtotal = $this->subtotal();
        $iva      = 0;
        foreach ($pedido as $item) {
            $iva += $subtotal * .16;
        }
        return $iva;
    }
    // Total de la compra
    public function total()
    {
        $pedido   = \Session::get('pedido');
        $total    = 0;
        $subtotal = $this->subtotal();
        $iva      = $this->iva();
        foreach ($pedido as $item) {
            $total += $subtotal + $iva;
        }
        return $total;
    }

//Guardamos los datos fiscales de los clientes
    public function store(Request $request)
    {

        $new_cliente = new Cliente;

        $v = \Validator::make($request->all(), [
            'razon_social'       => 'required|max:255',
            'rfc'                => 'required',
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
            'correo'             => 'required',

        ]);

        if ($v->fails()) {
            return redirect('mostrar/pedido#formulario')
                ->withErrors($v->errors());
        }

        $new_cliente->razon_social       = $request->razon_social;
        $new_cliente->rfc                = $request->rfc;
        $new_cliente->nombre_comercial   = $request->nombre_comercial;
        $new_cliente->contribuyente      = $request->contribuyente;
        $new_cliente->calle              = $request->calle;
        $new_cliente->no_exterior        = $request->no_exterior;
        $new_cliente->no_interior        = $request->no_interior;
        $new_cliente->colonia            = $request->colonia;
        $new_cliente->ciudad             = $request->ciudad;
        $new_cliente->cp                 = $request->cp;
        $new_cliente->pais               = $request->pais;
        $new_cliente->estado             = $request->estado;
        $new_cliente->telefono           = $request->telefono;
        $new_cliente->correo_facturacion = $request->correo_facturacion;
        $new_cliente->nombre_apellidos   = $request->nombre_apellidos;
        $new_cliente->puesto             = $request->puesto;
        $new_cliente->correo             = $request->correo;

        $new_pedido           = new OrdenCompra;
        $new_pedido->subtotal = $this->subtotal();
        $new_pedido->iva      = $this->iva();
        $new_pedido->total    = $this->total();
        $new_pedido->estado   = 'Pendiente';

        $new_cliente->save();
        // Guardamos el pedido en la bd
        $new_cliente->pedidos()->save($new_pedido);

        $cliente = \Session::get('cliente');
        $cliente = $request->all();
        \Session::put('cliente', $cliente);

        Mail::send(['pdf' => 'pedido.pdf'], $request->all(), function ($message) use ($request) {
            $pdf = $this->pdf();
            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Detalle de su pedido');
            //archivo adjunto
            $message->attachData($pdf, 'pedido.pdf');

            //receptor
            $message->to($request->correo, $request->nombre_apellidos);

        });

        \Session::forget('pedido');
        \Session::forget('cliente');
        return redirect('nuevo-noi')->with('mensaje', 'Hemos enviado a su correo electrónico los detalles de su pedido');
    }

    //Guardamos los datos fiscales de los clientes para abrir el escritorio de servicos en la modalidad suscripcion
    public function regSuscripcion(Request $request)
    {

        $new_cliente = new Cliente;

        $v = \Validator::make($request->all(), [

            'nombre_apellidos' => 'required',
            'correo'           => 'required|email',
            'razon_social'     => 'required|max:255',
            'rfc'              => 'required',
            'nombre_comercial' => 'required|max:255',
            'contribuyente'    => 'required',

        ]);

        if ($v->fails()) {
            return redirect('nuevo-noi#suscripcion')
                ->withErrors($v->errors());
        }

        $new_cliente->nombre_apellidos = $request->nombre_apellidos;
        $new_cliente->puesto           = $request->puesto;
        $new_cliente->correo           = $request->correo;
        $new_cliente->razon_social     = $request->razon_social;
        $new_cliente->rfc              = $request->rfc;
        $new_cliente->nombre_comercial = $request->nombre_comercial;
        $new_cliente->contribuyente    = $request->contribuyente;

        $new_cliente->save();

        $cliente = $request->all();

        Mail::send(['pdf' => 'pedido.pdf'], $request->all(), function ($message) use ($request) {

            //remitente
            $message->from('contacto@aspelsoluciones.com');
            //asunto
            $message->subject('Detalle de su pedido');

            //receptor
            $message->to($request->correo, $request->nombre_apellidos);

        });

        return redirect('nuevo-noi')->with('mensaje', 'Hemos enviado a su correo electrónico las instrucciones para que realice su respectivo pago y empieze a utilizar el sistema');
    }

    public function rfc($request)
    {
        $id_rfc = $request->rfc;
        return $id_rfc;
    }
//Generamos el pdf
    public function pdf()
    {
        $pedido   = \Session::get('pedido');
        $cliente  = \Session::get('cliente');
        $subtotal = $this->subtotal();
        $iva      = $this->iva();
        $total    = $this->total();
        //$referencia = $this->NoReferencia();

        $pdf = \PDF::loadView('templates.landings.tres-promociones.pdf2', compact('pedido', 'cliente', 'subtotal', 'iva', 'total'));
        return $pdf->stream('pedido.pdf');

        //$pdf = \PDF::loadView('templates.landings.tres-promociones.pedido-pdf', $cliente);
        //return $pdf->stream('pedido.pdf');

        //return view('templates.landings.tres-promociones.pedido-pdf', compact('pedido', 'subtotal', 'iva', 'total', 'referencia'));
    }

//Generamos el numero de referencia
    public function NoReferencia()
    {
        $numeros  = 100001;
        $fecha    = date("y") . date("m") . date("d");
        $contador = 100;
        $digitos  = 12;
        $result   = array();
        for ($n = $numeros; $n < $numeros + $contador; $n++) {
            $result[] = str_pad($n, $digitos, $fecha, STR_PAD_LEFT);
        }
        return $result[0];

    }

    //Guardamos la venta una vez que el pedido sea confirmado
    public function guardarVenta()
    {
        $subtotal = 0;
        $pedido   = \Session::get('pedido');
        $envio    = 100;

        foreach ($pedido as $producto) {
            $subtotal += $producto->Cantidad * $producto->precio;
        }

        $venta = Venta::create([
            'Subtotal' => $subtotal,
            'Envio'    => $envio,
            'id_users' => \Auth::user()->id,
        ]);

        foreach ($pedido as $producto) {
            $this->saveOrderItem($producto, $venta->id);
        }
    }
    //Guardamos los productos vendidos de cada venta
    public function guardarProductoVendido($producto, $id_venta)
    {
        Articulo_Vendido::create([
            'Precio'       => $producto->precio,
            'Cantidad'     => $producto->Cantidad,
            'id_productos' => $producto->id,
            'id_ventas'    => $id_venta,
        ]);
    }

}
