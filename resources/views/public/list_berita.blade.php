<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <title>List Berita - IPDN PAPUA</title>
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

        {{-- List Berita --}}
        <div class="grid lg:mx-20 mx-auto justify-center">
            @livewire('list-berita.berita')
        </div>

        {{-- Footer --}}
        <div>
            @livewire('component.public.footer')
        </div>

    </div>
    @livewireScripts
</body>

</html>
