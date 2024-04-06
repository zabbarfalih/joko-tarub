<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons Start -->
    <link href={{ asset("assets/images/favicon.ico")}} rel="icon">
    <!-- Favicon End -->

    <title>
        @if(isset($title) && $title !== '')
            {{ $title }} |
        @endif
        Joko Tarub - Jowo Kromo Tansah Murub
    </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>

    <!-- Font Awesome -->
    <script defer src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/js/all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

    <!-- Vanillas -->
    {{-- <link rel="stylesheet" href={{ asset("assets/css/palet.css")}}> --}}


        <!-- Link Integration -->
        <link rel="stylesheet" href={{ asset("assets/css/aos.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/normalize.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/slinky.min.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/slinky-mobile-theme.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/font-awesome.min.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/main.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/reset.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/miwlo.css")}}>
        <link rel="stylesheet" href={{ asset("assets/css/responsive.css")}}>
        <!-- custom css file link  -->
        <link rel="stylesheet" href={{ asset("assets/css/style.css")}}>

    <!-- Slots -->
    {{ $css ?? '' }}
    {{ $js_head ?? '' }}

</head>


<body>
    <x-home.partials.loader />

    <x-home.partials.navbar />

    {{ $slot }} <!-- Slot -->

    <x-home.partials.footer />

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js"></script>

    @if(session('status.success'))
        <x-elements.alert type="success" title="Berhasil" text="{{ session('status.success') }}" />
    @endif

    @if(session('status.error'))
        <x-elements.alert type="error" title="Gagal" text="{{ session('status.error') }}" />
    @endif

    <!-- Modernizr -->
    <script src={{ asset("assets/js/vendor/modernizr-3.11.2.min.js")}}></script>

    <!-- Parallax -->
    <script src={{ asset("assets/js/parallax.min.js")}}></script>
    <script src={{ asset("assets/js/parallax-scroll.js")}}></script>

    <!-- Animation -->
    <script src={{ asset("assets/js/aos.js")}}></script>

    <!-- Mobile Menu -->
    <script src={{ asset("assets/js/slinky.min.js")}}></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <!-- Miwlo JS -->
    <script src={{ asset("assets/js/app.js")}}></script>

    <!-- translate -->
    <script src={{ asset("assets/js/translate.js")}}></script>

    <!-- custom js file link  -->
    <script src={{ asset("assets/js/script.js")}}></script>

    <!-- Slots -->
    {{-- <script defer src={{ asset('assets/js/home/home.js') }}></script> --}}
    {{ $js_body ?? '' }}
</body>


</html>
