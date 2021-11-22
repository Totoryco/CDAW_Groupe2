<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Helloworld view</title>
    </head>
    <body>
        @extends('template')

        @section('content')

        @section('ditBonjour')
            @parent

            <p>Hello world!</p>
        @stop
    </body>
</html>
