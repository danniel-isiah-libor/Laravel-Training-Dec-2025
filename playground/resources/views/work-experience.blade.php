<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <ul>
            @foreach ($workExperiences as $workExperience)
                <li>
                    <h2>{{ $workExperience->company_name }}</h2>
                    <p>Position: {{ $workExperience->position }}</p>
                    <p>Duration: {{ $workExperience->tenure }}</p>
                </li>
            @endforeach
        </ul>
    </body>

</html>
