<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="yandex-verification" content="27480f8f450a31ee" />
    <link type="image/x-icon" rel="shortcut icon" href="favicons/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="favicons/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" href="favicons/apple-touch-icon.png">

    <title>{{ $title ?? 'NUIMG' }}</title>
    <meta name="description" content="" />
    @livewireStyles
    @vite(['resources/js/app.js'])

</head>
<body class="bg-cosmo">

{{$slot}}

@livewireScripts
</body>
</html>
