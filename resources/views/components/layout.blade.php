<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Men Base</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <section class="px-6 py-8">

        {{ $slot }}
        
    </section>
</body>
</html>