<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Favicon --}}
    <link href="https://ipdn.ac.id/assets/img/ipdn.png" rel="shortcut icon">
    <link href="https://ipdn.ac.id/assets/img/ipdn.png" rel="apple-touch-icon">

    <title>{{ $params['title'] }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    {{-- Container --}}
    <div class="grid grid-cols-1 gap-5">
        {{-- Navbar --}}
        <div class="">
            @livewire('component.public.navbar')
        </div>

        {{-- Header --}}
        <div class="grid lg:mx-20 mx-auto justify-center">
            @livewire('component.public.header')
        </div>

        {{-- Content --}}
        <div class="grid lg:mx-20 mx-auto justify-center">
            @yield('content')
        </div>

        {{-- Footer --}}
        <div>
            @livewire('component.public.footer')
        </div>
    </div>

    @livewireScripts
</body>

</html>
