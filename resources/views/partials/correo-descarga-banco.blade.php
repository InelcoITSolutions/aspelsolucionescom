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
                $link= 'ftp://descargas.aspel.com.mx/download/banco/reinstal/ASPEL-BANCO40_R6.exe';
                @endphp
                <p>
                    Link de descarga para Aspel BANCO 4.0
                    <a href="ftp://descargas.aspel.com.mx/download/banco/reinstal/ASPEL-BANCO40_R6.exe">
                        {{$link}}
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>