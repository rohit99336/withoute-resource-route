<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:blockv float-right">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <br><br>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                
                <div class="grid md:grid-cols-2 grid-cols-1 p-10">
                    <div class="md:p-10">
                        <h1 class="m-2 text-4xl font-bold">Developer Friendly</h1>
                        <div class="info text-gray-500 mt-7 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum corrupti possimus quam
                            sint
                            omnis distinctio similique itaque odio nam adipisci consequatur beatae minus consectetur
                            quod
                            praesentium maiores laboriosam illum, modi, blanditiis odit debitis! Officia, porro nemo,
                            omnis
                            error corporis deleniti labore recusandae esse voluptates dolor similique temporibus odio in
                            quisquam.
                        </div>
                       
                    </div>
                    <div class="mt-10">
                        <img class="w-full mx-auto max-w-sm"
                            src="https://raw.githubusercontent.com/akshaykhale1992/tailwind-experiment/main/images/undraw_coding_6mjf.svg">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
