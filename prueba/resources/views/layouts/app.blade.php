<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Blog de Miguel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <x-navbar></x-navbar>

    <main>
        {{ $slot }}
    </main>

    <x-footer></x-footer>
    
</body>

</html>
