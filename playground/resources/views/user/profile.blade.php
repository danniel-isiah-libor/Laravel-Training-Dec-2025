<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
      asa {{ $user->email }}
    </body>
=======
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <?php
        // echo htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ;
        ?>

        {{ $user->email }}

        {{-- @if (true)
            <h1>hello world</h1>
        @endif --}}

        {{-- {!! '<h1>HELLO WORLD</h1>' !!} --}}
    </body>

>>>>>>> ba83d18b5ddbdacbc22c59f5fc27131c86e33702
</html>
