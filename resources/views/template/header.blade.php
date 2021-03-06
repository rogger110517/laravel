<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Intranet</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<header id="header" class="header">
        <div class="header_content d-flex w-100">
            <div class="header_content_2">
                <div class="header_content_logo">
                    <a href=""><img src="{{ asset('assets/img/logo.png') }}" alt=""></a> 
                </div>
                <div class="header_content_navi">
                    <nav class="header_navigate">
                        <ul class="header_navigate_list">
                            <li class="header_navigate_list_li"><a href="javascript:void(0);" class="header_navigate_list_a">CONFERENCIAS</a></li>
                            <li class="header_navigate_list_li"><a href="javascript:void(0);" class="header_navigate_list_a">EVENTO EN VIVO</a></li>
                            <li class="header_navigate_list_li"><a href="javascript:void(0);" class="header_navigate_list_a">CITAS DE NEGOCIO</a></li>
                            <li class="header_navigate_list_li"><a href="javascript:void(0);" class="header_navigate_list_a">RUEDAS DE NEGOCIO</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="desktop">
                <div class="desktop_information">
                        <div class="desktop_information_content">
                            <a href="" class="desktop_information_content_filter"><i class="far fa-calendar pr-05"></i>FILTRO POR DÍA<i class="fas fa-chevron-down pl-4"></i></a>
                        </div>
                        <div class="desktop_information_content">
                            <a href="" class="desktop_information_content_user"><i class="fas fa-user-circle font-size-15 pr-05"></i>Usuario</a>
                        </div>
                </div>
            </div>
        </div>
</header>