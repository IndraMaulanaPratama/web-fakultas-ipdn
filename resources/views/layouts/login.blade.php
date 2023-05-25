<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - IPDN Kampus Daerah</title>
    {{-- Vite Plugin --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire Style --}}
    @livewireStyles

    <style>
        body,
        html {
            height: 100%;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url({{ asset('image/background/gate-ipdn.jpeg') }});
        }
    </style>
</head>

<body>

    <div class="flex flex-col justify-around" style="height: 100%;">
        <div
            class="self-center max-lg:p-7 lg:py-10 lg:px-28 flex justify-center flex-col gap-4 bg-base-200 bg-opacity-90 rounded-lg shadow-inner">

            @yield('content')

        </div>
    </div>


    {{-- Livewire Script --}}
    @livewireScripts
</body>

</html>
