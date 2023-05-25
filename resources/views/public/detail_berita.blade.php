<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    <title>Nama Berita - IPDN PAPUA</title>
</head>

<body>
    {{-- Container --}}
    <div class="grid grid-cols-1 gap-5 bg-accent">

        {{-- Navbar --}}
        <div class=" bg-base-100">
            @livewire('component.public.navbar')
        </div>

        {{-- Container --}}
        <div>

            @livewire('detail-berita.berita')

        </div>

        {{-- Footer --}}
        <div class="border-1 border-y-stone-50">
            @livewire('component.public.footer')
        </div>

    </div>


    @livewireScripts
</body>

</html>
