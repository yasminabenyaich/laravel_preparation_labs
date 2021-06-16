<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laravel Préparation labs </title>

 <!-- Favicons -->
 <link href={{asset('img/favicon.png') }} rel="icon">
 <link href={{asset ('img/apple-touch-icon.png') }} rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <link href={{ asset("/css/aos.css") }} rel="stylesheet">
    <link href={{ asset("/css/bootstrap.min.css") }} rel="stylesheet">
    <link href={{ asset("/css/bootstrap-icons.css") }} rel="stylesheet">
    <link href={{ asset("/css/boxicons.min.css ") }}rel="stylesheet">
    <link href={{ asset("/css/glightbox.min.css ")}} rel="stylesheet">
    <link href={{ asset("/css/swiper-bundle.min.css") }} rel="stylesheet">
   
    <link href={{ asset('css/style.css')}} rel="stylesheet">
    <link  rel="stylesheet"  href={{  asset("css/app.css") }}>
</head>
<body>

    @include('partials.navBack')

    <section class="hero">
        <div>
            @yield('content')
        </div>
    </section>
    <script src="{{ asset('js/app.js')}}" ></script>
    
    <script src="{{ asset("js/aos.js")}}"></script>
    <script src="{{ asset("/js/bootstrap.bundle.min.js ")}}" ></script>
    <script src="{{ asset("/js/glightbox.min.js ")}}" ></script>
    <script src="{{ asset("/js/isotope.pkgd.min.js")}}" ></script>
    <script src="{{ asset("/js/validate.js")}}" ></script>
    <script src="{{ asset("js/swiper-bundle.min.js")}}" ></script>
    <script src="{{ asset('js/main.js')}}" ></script>
  



    
</body>
</html>