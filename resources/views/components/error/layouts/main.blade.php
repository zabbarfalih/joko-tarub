<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @if(isset($title) && $title !== '')
            {{ $title }} |
        @endif
        PKL Politeknik Statistika STIS T.A. 2023/2024
    </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css"> -->
    <script defer src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/js/all.min.js"></script>

    <!-- Vanillas -->
    <link rel="stylesheet" href={{ asset("assets/css/palet.css")}}>
    <!-- <link rel="stylesheet" href={{ asset('assets/css/home/style.css') }}> -->
    <link rel="stylesheet" href={{ asset('assets/css/home/style-template.css') }}>

</head>

<body>
    {{ $slot }}

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js"></script>

    @if(session('status.success'))
    <x-elements.alert type="success" title="Berhasil" text="{{ session('status.success') }}" />
    @endif

    @if(session('status.error'))
    <x-elements.alert type="error" title="Gagal" text="{{ session('status.error') }}" />
    @endif
</body>

</html>