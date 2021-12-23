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
<main>
    <div class="mx-auto xl:w-10/12 2xl:w-8/12">
<h1 class="text-5xl pb-8 text-center">Livewire calendar</h1>
<livewire:appointments-calendar
    week-starts-at="1"
    before-calendar-view="calendar/before"
/>
    <a href="{{ route('welcome') }}" class="underline py-8 pl-3 text-blue-800">Back</a>
    </div>

</main>

@livewireScripts
@livewireCalendarScripts
@stack('scripts')
</body>
</html>
