<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */
Route::get('/', function () {
    return view('index');
});

// Route::resource('/', 'AspelProspectoController');
// RUTAS PARA EL PANEL DE ADMINISTRACION
 Route::get('admin', function () {
    return view('admin.index');
  });
Route::resource('admin/categorias', 'Admin\CategoriaController');


//inyeccion de dependencias para categoria
Route::bind('categoria', function ($categoria) {
    return aspelsoluciones\Categoria::find($categoria);
});

Route::resource('admin/productos', 'Admin\ProductoController');

Route::resource('admin/usuarios', 'Admin\UsuarioController');

//inyeccion de dependencias para los usuarios
Route::bind('usuario', function ($usuario) {
    return aspelsoluciones\User::find($usuario);
});

Route::get('admin/ventas', [
    'as'   => 'admin.ventas.index',
    'uses' => 'Admin\VentaController@index',
]);
Route::post('admin/ventas/get-articulos', [
    'as'   => 'admin.ventas.get-articulos',
    'uses' => 'Admin\VentaController@getArticulos',
]);
Route::get('admin/ventas/{$id}', [
    'as'   => 'admin.ventas.destroy',
    'uses' => 'Admin\VentaController@destroy',
]);


//Rutas para la autenticacion de los usuarios administradores
Route::get('admin/login', [
    'as'   => 'admin.login',
    'uses' => 'Admin\Auth\LoginController@showLoginForm',
]);
Route::post('admin/login', [
    'as'   => 'admin.login',
    'uses' => 'Admin\Auth\LoginController@login',
]);
Route::post('admin/logout', [
    'as'   => 'admin.logout',
    'uses' => 'Admin\Auth\LoginController@logout',
]);
Route::post('admin/password/email', [
    'as'   => 'admin.password_email',
    'uses' => 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail',
]);
Route::get('admin/password/reset', [
    'as'   => 'admin.password_reset',
    'uses' => 'Admin\Auth\ForgotPasswordController@showLinkRequestForm',
]);
Route::post('admin/password/reset', [
    'as'   => 'admin.password_reset',
    'uses' => 'Admin\Auth\ResetPasswordController@reset',
]);
Route::get('admin/password/reset/{token}', [
    'as'   => 'admin.password_reset',
    'uses' => 'Admin\Auth\ResetPasswordController@showResetForm',
]);
Route::get('admin/register', [
    'as'   => 'admin.register',
    'uses' => 'Admin\Auth\RegisterController@showRegistrationForm',
]);
Route::post('admin/register', [
    'as'   => 'admin.register',
    'uses' => 'Admin\Auth\RegisterController@register',
]);

//Route::resource('admin/pedidos', 'Admin\PedidoController');

// RUTAS PARA EL PERFIL DEL USUARIO
Route::get('/perfil', [
    'as'   => 'perfil',
    'uses' => 'PerfilUsuarioController@index',
]);

//GRUPO DE RUTAS PROTEGIDAS CON EL SISTEMA DE AUTENTICACION DE LARAVEL
Route::group(['middleware' => 'auth'], function () 
{
        
        
});
// star grupo desprotegido de logue
        Route::get('base-de-conocimientos', function () {
            return view('templates.base-de-conocimiento');
        });
        Route::get('preguntas-frecuentes', function () {
            return view('templates.preguntas-frecuentes');
        });
        Route::get('centro-de-descarga', function () {
            return view('templates.descargas');
        });
        Route::get('complementos', function () {
            return view('templates.complementos');
        });
//end del grupo destrotegido del logueo

// ========================================
//SECCIÓN DE PROMOCIONES ------ I N I C I O
Route::get('promociones', function () {
    return view('templates.promociones.promociones');
});

Route::get('promocion-sae-banco', function () {
    return view('templates.promociones.promocion-sae-banco');
});

Route::get('promocion-coi-banco', function () {
    return view('templates.promociones.promocion-coi-banco');
});

Route::get('promocion-coi-noi', function () {
    return view('templates.promociones.promocion-coi-noi');
});

Route::get('promocion-sae-coi-noi-banco', function () {
    return view('templates.promociones.promocion-sae-coi-noi-banco');
});

// SECCIÓN DE PROMOCIONES ------ F I N A L
//===========================================


Route::get('lista-de-precios', function () {
        return view('templates.precios');
    });
Route::get('bolsa-de-trabajo', function () {
    return view('templates.vacantes');
});
Route::get('invitacion-practicantes', function () {
    return view('templates.practicantes');
});
Route::get('nosotros', function () {
    return view('templates.nosotros');
});
Route::get('contacto', function () {
    return view('templates.contacto');
});

Route::get('servicios', function () {
    return view('templates.servicios');
});

Route::get('calendario-de-eventos', function () {
    return view('templates.calendario');
});
Route::get('navegacion', function () {
    return view('partials.navegacion');
});

Route::get('hardware', function () {
    return view('templates.hardware');
});

// RUTAS ASPEL SAE
Route::get('aspel-sae/sae-movil', function () {
    return view('templates.sae.sae-movil');
});
Route::get('aspel-sae', function () {
    return view('templates.sae.sae');
});
Route::get('aspel-sae/soluciones', function () {
    return view('templates.sae.soluciones');
});
Route::get('aspel-sae/lo-nuevo', function () {
    return view('templates.sae.lo-nuevo');
});

//RUTAS ASPEL COI
Route::get('aspel-coi', function () {
    return view('templates.coi.coi');
});
Route::get('aspel-coi/soluciones', function () {
    return view('templates.coi.soluciones');
});
Route::get('aspel-coi/lo-nuevo', function () {
    return view('templates.coi.lo-nuevo');
});

//RUTAS ASPEL NOI
Route::get('aspel-noi', function () {
    return view('templates.noi.noi');
});
Route::get('aspel-noi/soluciones', function () {
    return view('templates.noi.soluciones');
});
Route::get('aspel-noi/lo-nuevo', function () {
    return view('templates.noi.lo-nuevo');
});
Route::get('aspel-noi/pasos-deduccion-de-la-nomina', function () {
    return view('templates.noi.pasos-nomina');
});

//RUTAS ASPEL CAJA
Route::get('aspel-caja', function () {
    return view('templates.caja.caja');
});
Route::get('aspel-caja/soluciones', function () {
    return view('templates.caja.soluciones');
});
Route::get('aspel-caja/lo-nuevo', function () {
    return view('templates.caja.lo-nuevo');
});

//RUTAS ASPEL BANCO
Route::get('aspel-banco', function () {
    return view('templates.banco.banco');
});
Route::get('aspel-banco/soluciones', function () {
    return view('templates.banco.soluciones');
});
Route::get('aspel-banco/lo-nuevo', function () {
    return view('templates.banco.lo-nuevo');
});

//RUTAS ASPEL PROD
Route::get('aspel-prod', function () {
    return view('templates.prod.prod');
});
Route::get('aspel-prod/soluciones', function () {
    return view('templates.prod.soluciones');
});
Route::get('aspel-prod/lo-nuevo', function () {
    return view('templates.prod.lo-nuevo');
});

//RUTAS ASPEL FACTURE
Route::get('aspel-facture', function () {
    return view('templates.facture.facture');
});
Route::get('aspel-facture/soluciones', function () {
    return view('templates.facture.soluciones');
});
Route::get('aspel-facture/lo-nuevo', function () {
    return view('templates.facture.lo-nuevo');
});

//RUTAS ASPEL ADM
Route::get('aspel-adm', function () {
    return view('templates.adm.adm');
});
Route::get('aspel-adm/soluciones', function () {
    return view('templates.adm.soluciones');
});
Route::get('aspel-adm/lo-nuevo', function () {
    return view('templates.adm.lo-nuevo');
});


//RUTAS ASPEL sae nube
Route::get('aspel-sae-nube', function () {
    return view('templates.sae-nube.sae-nube');
});
Route::get('aspel-sae-nube/soluciones', function () {
    return view('templates.sae-nube.soluciones');
});
Route::get('aspel-sae-nube/lo-nuevo', function () {
    return view('templates.sae-nube.lo-nuevo');
});


//RUTAS ASPEL espacio
Route::get('aspel-espacio', function () {
    return view('templates.espacio.espacio');
});
Route::get('aspel-espacio/soluciones', function () {
    return view('templates.espacio.soluciones');
});
Route::get('aspel-espacio/lo-nuevo', function () {
    return view('templates.espacio.lo-nuevo');
});
Route::get('aspel-espacio/lista-precio-espacio', function () {
    return view('templates.espacio.lista-precio-espacio');
});

//RUTAS ADM Tienda
Route::get('aspel-ADMTienda', function () {
    return view('templates.adm-tienda.ADM');
});
Route::get('aspel-AMDTienda/soluciones', function () {
    return view('templates.adm-tienda.soluciones');
});
Route::get('aspel-ADMTienda/lo-nuevo', function () {
    return view('templates.adm-tienda.lo-nuevo');
});

/*Route::get('aspel-ADMTienda/lista-precio-ADMTienda', function () {
    return view('templates.adm-tienda.lista-precios');
});
*/

Route::get('aspel-ADMTienda/Dispositivos-compatibles-ADMTienda', function () {
    return view('templates.adm-tienda.dispositivos');
});

//RUTAS DE LAS LANDING PAGE
/*Route::get('presentacion/nuevo-noi', function () {
return view('templates.landings.presentaciones.nuevo-noi');
});*/

Route::resource('presentacion/nuevo-noi', 'ProspectoController');

Route::resource('actualizacion-noi', 'ActualizacionNoiController');

Route::resource('nuevo-noi', 'ProductosNuevoController@index');

Route::get('curso/sae-basico', function () {
    return view('templates.landings.cursos.sae');
});

//RUTAS PARA LAS SOLUCIONES POR ACTIVIDAD
Route::get('productos/empresas-de-manofactura', function () {
    return view('templates.soluciones por actividad.empresa-de-manofactura');
});
Route::get('productos/instituciones-educativas', function () {
    return view('templates.soluciones por actividad.instituciones-educativas');
});
Route::get('productos/despachos-contables-y-nomina', function () {
    return view('templates.soluciones por actividad.despachos-contables-y-nomina');
});
Route::get('productos/empresas-comercializadoras', function () {
    return view('templates.soluciones por actividad.empresas-comercializadoras');
});
Route::get('productos/facturacion-electronica', function () {
    return view('templates.soluciones por actividad.facturacion-electronica');
});
Route::get('productos/punto-de-venta', function () {
    return view('templates.soluciones por actividad.punto-de-venta');
});
// RUTAS DE LA AUTENTICACION
Route::auth();
Route::get('/logout', [
    'as'   => 'auth.logout',
    'uses' => '\aspelsoluciones\Http\Controllers\Auth\LoginController@logout',
]);
Route::get('/home', 'HomeController@index');

//RUTAS DE LA TIENDA
Route::get('/tienda', 'TiendaController@index');

Route::get('/tienda/producto/{etiqueta}', [
    'as'   => 'detalle-producto',
    'uses' => 'TiendaController@show',
]);

/** Route to post search results **/
Route::post('/queries', [
    'uses' => 'BuscadorController@buscar',
    'as'   => 'queries.search',
]);

Route::bind('producto', function ($etiqueta) {
    return aspelsoluciones\Producto::where('etiqueta', $etiqueta)->first();
});
// Carrito de compras
Route::get('/tienda/carrito', [
    'as'   => 'mostrar-carrito',
    'uses' => 'CarritoController@show',
]);
Route::get('/tienda/carrito/añadir/{producto}', [
    'as'   => 'añadir-carrito',
    'uses' => 'CarritoController@add',
]);
Route::get('/tienda/carrito/eliminar/{producto}', [
    'as'   => 'carrito-eliminar',
    'uses' => 'CarritoController@delete',
]);
Route::get('/tienda/carrito/vaciar', [
    'as'   => 'vaciar-carrito',
    'uses' => 'CarritoController@trash',
]);
Route::get('/tienda/carrito/actualizar/{producto}/{cantidad?}', [
    'as'   => 'actualizar-carrito',
    'uses' => 'CarritoController@update',
]);

Route::get('/tienda/detalles-de-la-compra', [
    'middleware' => 'auth',
    'as'         => 'detalle-pedido',
    'uses'       => 'CarritoController@detallePedido',
]);

//Forma de pago transferencia electronica
Route::get('transferencia-electronica', array(
    'as'   => 'transferencia-electronica',
    'uses' => 'CarritoController@enviarPedido',
));

// Enlace a PayPal
Route::get('payment', array(
    'as'   => 'payment',
    'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
    'as'   => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

// OTRAS RUTAS PARA LAS PROMO DEL NUEVO NOI 8.0
Route::get('promociones-nuevo-noi', [
    'as'   => 'promo-noi',
    'uses' => 'ProductosNuevoController@index',
]);

Route::bind('productsnoi', function ($tipo) {
    return aspelsoluciones\ProductosNuevo::where('tipo', $tipo)->first();
});
Route::get('mostrar/pedido', [
    'as'   => 'mostrar-pedido',
    'uses' => 'PedidoPoductoNoiController@show',
]);
Route::get('promo/añadir/{productsnoi}', [
    'as'   => 'añadir-pedido',
    'uses' => 'PedidoPoductoNoiController@add',
]);
Route::get('promo/eliminar/{productsnoi}', [
    'as'   => 'eliminar-pedido',
    'uses' => 'PedidoPoductoNoiController@delete',
]);

/*Route::get('promo/actualizar', [
'as'   => 'actualizar-pedido',
'uses' => 'PedidoPoductoNoiController@agregarUser',
]);*/
Route::get('promo/actualizar/{productsnoi}/{cantidad?}', [
    'as'   => 'actualizar-pedido',
    'uses' => 'PedidoPoductoNoiController@update',
]);
Route::get('promo/agregar-users/{productsnoi}/{cantidad_users?}', [
    'as'   => 'agregar-users',
    'uses' => 'PedidoPoductoNoiController@user_add',
]);
Route::get('promo/eliminar-usuarios/{productsnoi}', [
    'as'   => 'eliminar-usuario',
    'uses' => 'PedidoPoductoNoiController@delete_user',
]);
Route::get('promo/agregar-servicio/{productsnoi}/{cantidad_users?}', [
    'as'   => 'agregar-servicio',
    'uses' => 'PedidoPoductoNoiController@service',
]);
Route::get('quitar-servicio/{productsnoi}', [
    'as'   => 'quitar-servicio',
    'uses' => 'PedidoPoductoNoiController@delete_service',
]);
Route::get('cancelar-compra', [
    'as'   => 'cancelar-compra',
    'uses' => 'PedidoPoductoNoiController@trash',
]);
// pago con PayPal
Route::get('payments', array(
    'as'   => 'payments',
    'uses' => 'PagoNoiController@postPayment',
));

Route::get('payments/status', array(
    'as'   => 'payments.status',
    'uses' => 'PagoNoiController@getPaymentStatus',
));

/*Route::get('pdf', function () {
$pdf = PDF::loadView('templates.landings.tres-promociones.pedido-pdf');
return $pdf->download('pedido.pdf');
return view('templates.landings.tres-promociones.pedido-pdf');
});*/

Route::get('pdf', [
    'as'   => 'pdf',
    'uses' => 'PedidoPoductoNoiController@pdf',

]);

Route::get('ver-pdf', [
    'as'   => 'ver-pdf',
    'uses' => 'DescargasController@getDownload',

]);
//ruta para registrar los datos de los clientes de licencia nueva y actualizacion
Route::post('registrar-pedido', [
    'as'   => 'registro',
    'uses' => 'PedidoPoductoNoiController@store',
]);
// para los de suscripcion
Route::post('registrar-suscripcion', [
    'as'   => 'suscripcion',
    'uses' => 'RegSuscripcionController@regSuscripcion',
]);
// RUTAS PARA LAS DESCARGAS DE LOS SISTEMAS ASPEL
//Descargas del demos de 30 dias
Route::group(['middleware' => 'auth'], function () {

    Route::get('descargar-sae', [
        'as'   => 'sae',
        'uses' => 'DescargasController@linkSae',

    ]);
    Route::get('descargar-coi', [
        'as'   => 'coi',
        'uses' => 'DescargasController@linkCoi',

    ]);
    Route::get('descargar-noi', [
        'as'   => 'noi',
        'uses' => 'DescargasController@linkNoi',

    ]);
    Route::get('descargar-caja', [
        'as'   => 'caja',
        'uses' => 'DescargasController@linkCaja',

    ]);
    Route::get('descargar-banco', [
        'as'   => 'banco',
        'uses' => 'DescargasController@linkBanco',

    ]);
    Route::get('descargar-prod', [
        'as'   => 'prod',
        'uses' => 'DescargasController@linkProd',

    ]);
    Route::get('descargar-facture', [
        'as'   => 'facture',
        'uses' => 'DescargasController@linkFacture',

    ]);

});
// SAE
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-sae', [
    'as'   => 'sae-directa2',
    'uses' => 'DescargasController@linkSae',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-sae', 'DescargasController@storeSae');

// COI
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-coi', [
    'as'   => 'coi-directa2',
    'uses' => 'DescargasController@linkCoi',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-coi', 'DescargasController@storeCoi');

// NOI
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-noi', [
    'as'   => 'noi-directa2',
    'uses' => 'DescargasController@linkNoi',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-noi', 'DescargasController@storeNoi');

// CAJA
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-caja', [
    'as'   => 'caja-directa2',
    'uses' => 'DescargasController@linkCaja',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-caja', 'DescargasController@storeCaja');

// BANCO
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-banco', [
    'as'   => 'banco-directa2',
    'uses' => 'DescargasController@linkBanco',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-banco', 'DescargasController@storeBanco');

// PROD
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-prod', [
    'as'   => 'prod-directa2',
    'uses' => 'DescargasController@linkProd',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-prod', 'DescargasController@storeProd');

// FACTURE
//Descargas directa 1. si el usuario esta logeado enviar link con un solo click
Route::get('descarga-directa2-facture', [
    'as'   => 'facture-directa2',
    'uses' => 'DescargasController@linkFacture',

]);
//Descargas directa 2. si el usuario no esta logeado pedirle el correo para enviarle el link
Route::resource('descarga-directa1-facture', 'DescargasController@storeFacture');

Route::get('popup-prueba', function () {
    return view('templates.landings.popup-prueba');
});

//RUTAS DE LAS LANDING PAGE de COI-----ESTOS AUN NO TIENEN LA CX A BD:  
            // ESTA RUTA YA DIRIGE AL CONTROLADOR DE LA PAGINA "actualizacion-coi"
    Route::resource('actualizacion-coi', 'ActualizacionCoiController');
          // Esta ruta dirigira al controlador de nueva licencia coi
    Route::resource('nuevo-coi', 'LicenciaCoiController');

//RUTAS DE LAS LANDING PAGE de SAE-----ESTOS AUN NO TIENEN LA CX A BD: 
            // ESTA RUTA YA DIRIGE AL CONTROLADOR DE LA PAGINA "actualizacion-coi"
    Route::resource('actualizacion-sae', 'ActualizacionSaeController');
          // Esta ruta dirigira al controlador de nueva licencia coi
    Route::resource('nuevo-sae', 'LicenciaSaeController');    

//RUTAS DE LAS LANDING PAGE de SAE-----ESTOS AUN NO TIENEN LA CX A BD: 
            // ESTA RUTA YA DIRIGE AL CONTROLADOR DE LA PAGINA "actualizacion-coi"
    Route::resource('actualizacion-facture', 'ActualizacionFactureController');
          // Esta ruta dirigira al controlador de nueva licencia coi
    Route::resource('nuevo-facture', 'LicenciaFactureController');

//RUTAS DE LAS LANDING PAGE de CAJA-----ESTOS AUN NO TIENEN LA CX A BD: 
            // ESTA RUTA YA DIRIGE AL CONTROLADOR DE LA PAGINA "actualizacion-caja"
    Route::resource('actualizacion-caja', 'ActualizacionCajaController');
          // Esta ruta dirigira al controlador de nueva licencia caja
    Route::resource('nuevo-caja', 'LicenciaCajaController');

//RUTAS PARA LA LANDING DE FACTURACION
    Route::get('factura-electronica', function () {
    return view('templates.facturacion.2017.facturacion');
});
//RUTAS PARA LA LANDING DE FACTURACION
    Route::get('nuevafactura', function () {
    return view('templates.facturacion.2017.facturacion');
});    
