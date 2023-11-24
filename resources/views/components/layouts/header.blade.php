<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="yandex-verification" content="27480f8f450a31ee" />
    <link type="image/x-icon" rel="shortcut icon" href="/favicons/favicon.ico">
    <link type="image/png" sizes="16x16" rel="icon" href="/favicons/favicon-16x16.png">
    <link type="image/png" sizes="32x32" rel="icon" href="/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" href="/favicons/apple-touch-icon.png">

    <title>{{ $title ?? 'NUIMG' }}</title>
    <meta name="description" content="Indulge in the timeless elegance and diverse beauty of our curated photo gallery showcasing captivating images of women. Explore a collection that celebrates the strength, grace, and individuality of women across cultures and moments in time. From empowering portraits to candid moments that capture the essence of femininity, our site offers a visual journey that resonates with authenticity and appreciation. Immerse yourself in a world where each image tells a unique story, inviting you to embrace the multifaceted tapestry of womanhood. Elevate your visual experience with our carefully selected and thoughtfully presented images that redefine the art of capturing the spirit of women in all their splendor." />
    @livewireStyles
    @vite(['resources/js/app.js'])

</head>
<body class="bg-cosmo overflow-y-scroll">

{{$slot}}

@livewireScripts
</body>
</html>
