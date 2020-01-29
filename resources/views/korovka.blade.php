<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            p {
                align-items: center;
                display: flex;
                color: crimson;
                font-size: 72px;
            }

        </style>
    </head>
    <body>
    <ul>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>
     @endforeach
    </ul>
    </body>
</html>
