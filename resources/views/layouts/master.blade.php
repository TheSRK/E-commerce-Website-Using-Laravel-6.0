<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>

    @include('partials.styles') {{-- CSS styles --}}
</head>

<body>

    <div class="wrapper">

        @include('partials.nav') {{-- nav bar --}}


        @yield('content') {{-- sidebar and content --}}


        @include('partials.footer') {{-- footer --}}


    </div>






    @include('partials.scripts') {{-- javascripts --}}


</body>

</html>