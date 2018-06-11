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
                $link= 'ftp://aspelprod.cloudapp.net/Download/Noi/reinstal/Aspel-NOI80_R2.exe';
                @endphp
                <p>
                    Link de descarga para Aspel NOI 8.0
                    <a href="ftp://aspelprod.cloudapp.net/Download/Noi/reinstal/Aspel-NOI80_R2.exe">
                        {{$link}}
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>