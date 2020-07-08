<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
<div class="container">
    @yield('content')
</div>

@yield('footer')

<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
