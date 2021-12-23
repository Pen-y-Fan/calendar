<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @livewireStyles
    <link href="/css/app.css" rel="stylesheet">
    <title>Laravel calendar</title>
</head>
<body>
<h1 class="text-5xl pb-8 text-center">Livewire full calendar</h1>
<livewire:fullcalendar/>
<a href="{{ route('welcome') }}" class="underline py-8 pl-3 text-blue-800">Back</a>
@livewireScripts
@stack('scripts')
</body>
</html>
