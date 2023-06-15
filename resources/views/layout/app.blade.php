<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
    @vite('resources/scss/app.scss')
</head>

<body>
    @include('partials.header')

    @include('partials.jumbotron')

    @yield('content')

    @include('partials.footer')

</body>

</html>