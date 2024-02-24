<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Application Name  --}}
    <title>{{config('app.name')}}</title>

    {{-- fontawesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- tailwindcss js --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!--Logo icon-->
    <link href="{{asset('assets/img/logo.png')}}" rel="icon" type="img/png" size="16x16" />

    <!--custom css -->
    <link href="{{'http://localhost:8000/assets/dist/css/style.css'}}" rel="stylesheet" type="text/css" />

    @yield('css')

</head>
<body class="pb-32">
