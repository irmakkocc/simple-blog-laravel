<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title') - {{$config->title}}</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="{{asset('front/')}}/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset($config->favicon) }}" />
        <style>
        .list-inline-item a {
            display: flex;
            align-items: center;
            text-decoration: none; /* Altı çizili olmaması için */
            color: black; /* Siyah renk için */
        }

        .list-inline-item a span {
            margin-left: 5px; /* Simge ile yazı arasındaki boşluk */
        }

        .list-inline-item a:hover span {
            color: black; /* Hover durumunda da siyah kalması için */
        }

        .list-group-item a {
            text-decoration: none; /* Altı çizili olmaması için */
            color: black; /* Siyah renk için */
        }

        .list-group-item a:hover {
            color: black; /* Hover durumunda da siyah kalması için */
        }

        .list-group-item.active a {
            color: white; /* Aktif öğenin beyaz renk olması için (Bootstrap default) */
        }
    </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    @if($config->logo!=null)
                    <img src="{{asset($config->logo)}}" width="80"/>
                    @else
                        {{$config->title}}
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Anasayfa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4" style="background-image: url('@yield('bg')')">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">@yield('title') </h1>
                </div>
            </div>
        </header>

        <!-- Page content-->
        <div class="container">
            <div class="row">