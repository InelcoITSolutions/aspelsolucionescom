<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Correo de descarga
        </title>
        <link href="" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @php
                $link= 'ftp://descargas.aspel.com.mx/download/caja/reinstal/ASPEL-CAJA35_R10.exe';
                @endphp
                <p>
                    Link de descarga para Aspel CAJA 3.5
                    <a href="ftp://descargas.aspel.com.mx/download/caja/reinstal/ASPEL-CAJA35_R10.exe">
                        {{$link}}
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>