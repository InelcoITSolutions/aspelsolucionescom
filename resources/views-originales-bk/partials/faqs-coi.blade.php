<div class="sppb-addon-container " style="">
    <div class="sppb-addon sppb-addon-feature sppb-text-left ">
        <div class="sppb-addon-content">
            <div class="sppb-media">
                <div class="pull-left">
                    <div class="sppb-icon">
                        <span style="display:inline-block;text-align:center;color:rgb(0, 93, 171);;">
                            <i class="fa fa-question-circle" style="font-size:40px;width:40px;height:40px;line-height:40px;;">
                            </i>
                        </span>
                    </div>
                </div>
                <div class="sppb-media-body">
                    <h3 class="sppb-feature-box-title sppb-media-heading" style="font-size:35px;line-height:35px;">
                        Preguntas de Clientes sobre Aspel COI
                    </h3>
                    <div class="sppb-addon-text">
                        Enlistamos las preguntas más frecuentes de nuestros clientes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sppb-empty-space clearfix" style="margin-bottom:30px;">
    </div>
    <div class="sppb-addon sppb-addon-accordion miacordeon">
        <div class="sppb-addon-content">
            <div class="sppb-panel-group miacordeon">
                <div class="sppb-panel sppb-panel-default active">
                    <div class="sppb-panel-heading active">
                        <span class="sppb-panel-title">
                            Al imprimir el Estado de Resultados me duplica el último rango, ¿Qué puedo hacer?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: block;">
                        <div class="sppb-panel-body">
                            <p>
                                Es importarte mencionar que los estados financieros como Balance General o Estado de Resultados se basan en los Rubros para imprimirse, en este caso se recomienda revisar la definición de Rubros, esto dentro del detalle de cada cuenta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            Al intentar eliminar una cuenta, el Sistema indica que tiene movimientos, ¿Cómo puedo eliminarla?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                Para poder eliminar cuentas se debe verificar en primer lugar, si el saldo de la cuenta es cero y posteriormente:
                            </p>
                            <ol>
                                <li>
                                    Generar un respaldo de toda la Base de Datos.
                                </li>
                                <li>
                                    Generar otro respaldo del archivo de pólizas: Para ello se deberá aceder a (Menú Utilerías / Respaldo de archivos / Generación de respaldo, activar el parámetro de Sólo Base de datos y seleccionar el parámetro Máscara para nombre de archivos, definiendo la sintaxis: ?Operiodoañoempresa.*), por ejemplo, si se tiene que respaldar el mes de julio del 2006 de la empresa 2, sería: ?O070602.*
                                </li>
                                <li>
                                    Realizar el Borrado de movimientos y saldo inicial, desde la opción Procesos / Borrado de movimientos / Borra movimientos y saldo inicial.
                                </li>
                                <li>
                                    Desde el Catálogo de cuentas, ejecutar la opción Edición / Eliminar y eliminar la cuenta (as).
                                </li>
                                <li>
                                    Reinstalar el respaldo que se hizo de pólizas (Utilerías / Respaldo de archivos / Restauración de respaldo y activar Sólo Base de datos)
                                </li>
                                <li>
                                    Ejecutar el proceso de Contabilización (Procesos / Contabilización) o Recuperación de pólizas desde Control de archivos, dependiendo si se tiene activo el parámetro de contabilizar en línea (Configuración / Parámetros del sistema / Pólizas).
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            Mi Balanza de Comprobación es correcta, pero mi Balance General no, ¿Qué puedo hacer?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                El Balance General utiliza para su emisión el catálogo de Rubros, el cual agrupa en conceptos (como son: Activo Circulante, Pasivo a corto plazo, etc.) un grupo de cuentas contables. Por lo que, debe verificarse que se encuentren definidas correctamente el grupo de cuentas dentro de cada rubro para la emisión del Balance General.
                            </p>
                            <p>
                                El Balance General toma los rubros del 1 al 5 en orden ascendente del catálogo que el sistema trae como estándar. Estos primeros 5 rubros son los correspondientes a:
                            </p>
                            <ul>
                                <li>
                                    Activo Circulante
                                </li>
                                <li>
                                    Activo No circulante
                                </li>
                                <li>
                                    Pasivo a Corto Plazo
                                </li>
                                <li>
                                    Pasivo a Largo Plazo
                                </li>
                                <li>
                                    Capital
                                </li>
                            </ul>
                            <p>
                                Por otro lado, si se requiere el uso del: Activo Circulante, Fijo y Diferido. Es necesario modificar los nombres de los Rubros y las cuentas que comprenden (Archivos/Rubros), así como modificar, con el Editor de formatos (menú: Archivos / Editor de formatos / Editor ) el archivo Bgralw.fto ya que éste llama a los rubros definidos en el catálogo de cuentas estándar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            ¿Por qué cuando estoy en Microsoft Excel® en una hoja de cálculo con copiado especial, aparece el mensaje: Imposible modificar parte de una matriz?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                Porque se trató de modificar un dato que forma parte de una matriz de datos, la forma de hacer modificaciones en la fórmula es la siguiente:
                            </p>
                            <ol>
                                <li>
                                    Con Shift y el cursor, seleccionar las celdas que ocupe la función.
                                </li>
                                <li>
                                    Con la tecla F2 modificar la fórmula.
                                </li>
                                <li>
                                    Para actualizar, teclear simultáneamente Shift + Ctrl + Enter.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            ¿Qué proceso debo llevar acabo para realizar la traducción de archivos de mi versión anterior de Aspel-COI?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                Si tu versión de Aspel-COI es 5x o 6 y deseas traducir a la versión 7.0 el procedimiento a realizar es el siguiente:
                            </p>
                            <ol>
                                <li>
                                    No es necesario que el equipo donde se utilice Aspel-COI 7.0 tenga instalada la versión anterior, únicamente se debe contar con los archivos de la Base de Datos a traducir.
                                </li>
                                <li>
                                    Hacer la traducción desde el Administrador de periodos dando clic en el botón correspondiente o bien presionando la tecla de función (F7).También es posible realizarlo desde el menú Utilerías / Traducción de archivos.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            Si tengo una versión 4.0 ¿Perderé mi información o puedo tenerla en la última versión de Aspel-COI?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                No se pierde la información, solo bastará que se realice una traducción de la información para migrar todo a la última versión. Para ellos se realiza un puente de sistemas esto es: de la versión 4 tendrá que traducir con un sistema Aspel-COI5x y por último traducir a la última versión.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            ¿Tengo que comprar esa versión puente para poder realizar la traducción?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                No, solo bastará con tener instalado esta versión en el mismo equipo donde se tiene la última versión y tener los archivos a traducir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            Si cuento con una versión anterior del Sistema, ¿es necesario pagar por la actualización a la versión 7.0?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                Si te encuentras en la modalidad de Suscripción no, sólo bastará con realizar la actualización desde tu Escritorio de Servicio, de lo contrario, si cuentas con una versión de compra, deberás comprar el paquete de actualización.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sppb-panel sppb-panel-default">
                    <div class="sppb-panel-heading">
                        <span class="sppb-panel-title">
                            ¿Con que Sistemas Aspel se tiene interface?
                        </span>
                    </div>
                    <div class="sppb-panel-collapse" style="display: none;">
                        <div class="sppb-panel-body">
                            <p>
                                Se tiene interface con Aspel-NOI, Aspel-SAE, Aspel-BANCO y Aspel-CAJA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>