<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CHU | Mostaganem</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Pfe-Licence/resources/img/favicon.png" rel="icon">
    <link href="Pfe-Licence/resources/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--CSS File -->
    <!--Bootstrap File -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/css/page.css', 'resources/js/app.js','resources/js/main.js'])
</head>

<body>
<!-- ======= Top Bar ======= -->
    @include('components\navbar')

   {{ $slot }}

   <!-- footer page -->
    @include('components\footer')

</body>
</html>
