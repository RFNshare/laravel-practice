<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        .col-md-6
        {
            text-align: center;
            color: darkblue;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Employee ID: {{$id}} </h1><br>
            <h1>Employee Name: {{$name}} </h1><br>
            <h1>Employee Pass: {{$pass}} </h1><br>
        </div>
    </div>
</div>
</body>
</html>