<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/boot strap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            .nop {
                margin: 4% auto;
            }
            
            .redi {
                width: 250px;
                margin: auto;
            }

            .redo {

                margin: auto;
            }

            .nip {
                width: 200px;
                height: 20px;
            }

            .nap {
                margin: 5% auto;
            }
            .cont {
                margin-left: 10%;
                width: 1600px;
                display: flex;
                justify-content: space-around;
            }

            .dropdown {
            max-width: 300px;
            border-radius: 5px;
            margin: 100px;
            background: rgb(30, 144, 255);
            overflow: hidden;
            }

            .btn-top {
            padding: 20px;
            width: 100%;
            border: none;
            outline: none;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgb(30, 144, 255);
            cursor: pointer;
            border-radius: 5px;
            color: #f1f1f1;
            }

            .btn-top svg {
            width: 20px;
            }

            .bloc-links {
            padding: 0 20px;
            transition: height 0.2s ease-in-out;
            height: 0;
            }

            .bloc-links li {
            list-style-type: none;
            padding: 5px 0;
            }

            .bloc-links li a {
            font-size: 18px;
            color: #f1f1f1;
            margin-left: 5px;
            }

            .bloc-links li:last-child {
            padding-bottom: 25px;
            }

            .dropdown1 {
            max-width: 300px;
            border-radius: 5px;
            margin: 100px;
            background: rgb(30, 144, 255);
            overflow: hidden;
            }

            .btn-top1 {
            padding: 20px;
            width: 100%;
            border: none;
            outline: none;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgb(30, 144, 255);
            cursor: pointer;
            border-radius: 5px;
            color: #f1f1f1;
            }

            .btn-top1 svg {
            width: 20px;
            }

            .bloc-links1 {
            padding: 0 20px;
            transition: height 0.2s ease-in-out;
            height: 0;
            }

            .bloc-links1 li {
            list-style-type: none;
            padding: 5px 0;
            }

            .bloc-links1 li a {
            font-size: 18px;
            color: #f1f1f1;
            margin-left: 5px;
            }

            .bloc-links1 li:last-child {
            padding-bottom: 25px;
            }

            .dropdown2 {
            max-width: 300px;
            border-radius: 5px;
            margin: 100px;
            background: rgb(30, 144, 255);
            overflow: hidden;
            }

            .btn-top2 {
                padding: 20px;
                width: 100%;
                border: none;
                outline: none;
                font-size: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: rgb(30, 144, 255);
                cursor: pointer;
                border-radius: 5px;
                color: #f1f1f1;
            }

            .btn-top2 svg {
                width: 20px;
            }

            .bloc-links2 {
                padding: 0 20px;
                transition: height 0.2s ease-in-out;
                height: 0;
            }

            .bloc-links2 li {
            list-style-type: none;
            padding: 5px 0;
            }

            .bloc-links2 li a {
            font-size: 18px;
            color: #f1f1f1;
            margin-left: 5px;
            }

            .bloc-links2 li:last-child {
            padding-bottom: 25px;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="js/main.js" ></script>
    </body>
</html>
