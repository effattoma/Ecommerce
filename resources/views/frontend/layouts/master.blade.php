<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>

    @include('frontend.partials.styles')
</head>

<body>

    @include('frontend.partials.nav')

    @yield('content')




    @include('frontend.partials.footer')
    @include('frontend.partials.scripts')

</body>

</html>