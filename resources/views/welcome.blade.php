<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    @php
        $color= 'yellow';
    @endphp

    <body>

        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">
                <x-slot name="title">
                    Titulo 1
                </x-slot>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, vitae!
            </x-alert>

            <x-alert>
                <x-slot name="title">
                    Titulo 2
                </x-slot>
                Hola mundo
            </x-alert>

            <x-alert>
                <x-slot name="title">
                    Titulo 2
                </x-slot>
                Hola mundo
            </x-alert>

        </div>

    </body>

</html>
