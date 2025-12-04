<!DOCTYPE html>
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

</html>
