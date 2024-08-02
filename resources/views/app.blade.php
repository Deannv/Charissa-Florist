<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('storage/contents/logo/logo.jpg') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>
    <style>
        /*  */
    </style>
</head>
<body>
    @include('components.header')
    @include('components.hero')
    @include('components.stats')
    @include('components.about')
    @include('components.list')
    @include('components.contact')
    @include('components.footer')
    <script>
        // 
    </script>
</body>
</html>