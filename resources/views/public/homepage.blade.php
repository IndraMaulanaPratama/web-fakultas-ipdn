<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <title>Kampus Daerah - IPDN</title>
</head>

<body>
    {{-- Menu Atas --}}
    <div class='mb-5'>
        @livewire('component.public.navbar')
    </div>

    {{-- Container Header --}}
    <div class="my-5 lg:mx-20 mx-auto">
        {{-- Content --}}
        <div class="flex flex-col justify-center items-center mx-auto">

            {{-- Header --}}
            <div class="mb-5">
                @livewire('component.public.header')
            </div>

        </div>
    </div>

    {{-- Container Berita --}}
    <div class="my-5 lg:mx-36">
        {{-- Content --}}
        <div class="flex justify-center items-center">

            {{-- Berita --}}
            <div class="">
                {{-- Header Section Berita --}}
                <div class="flex justify-center mb-4">
                    <p class="text-lg font-semibold font-serif text-slate-400 rounded-xl">Berita Terbaru Kampus Daerah
                        Papua</p>
                </div>

                @livewire('homepage.berita')
            </div>

        </div>
    </div>

    <div class="divider my-5 lg:mx-64"></div>

    {{-- Container Sambutan Direktur --}}
    <div class="my-5 lg:mx-36">
        {{-- Content --}}
        <div class="flex justify-center items-center">

            {{-- Konten Direktur --}}
            <div class="">
                @livewire('homepage.direktur')
            </div>

        </div>
    </div>

    <div class="divider my-5 lg:mx-64"></div>

    {{-- Container Apps IPDN --}}
    <div class="my-5 lg:mx-36">
        {{-- Content --}}
        <div class="flex justify-center items-center">

            {{-- Apps IPDN --}}
            <div class="">
                {{-- Header Section Berita --}}
                <div class="flex justify-center mb-4">
                    <p class="text-lg font-semibold font-serif text-slate-400 rounded-xl">System Pembelajaran IPDN</p>
                </div>

                @livewire('homepage.apps-ipdn')
            </div>

        </div>
    </div>

    {{-- <div class="divider my-5 lg:mx-64"></div> --}}

    {{-- Container Mars dan Hymne --}}
    <div class="my-10 xl:mx-36">
        {{-- Content --}}
        <div class="flex justify-center items-center">

            {{-- Mars Ipdn --}}
            <div class="">
                @livewire('homepage.mars-ipdn')
            </div>

        </div>
    </div>

    <div class="divider my-5 lg:mx-64"></div>

    {{-- Container Testimoni --}}
    <div class="my-5 xl:mx-36">
        {{-- Content --}}
        <div class="flex justify-center items-center">


            {{-- Mars Ipdn --}}
            <div class="">
                {{-- Header Section Berita --}}
                <div class="flex justify-center mb-4">
                    <p class="text-lg font-semibold font-serif text-slate-400 rounded-xl">Real Testimonial</p>
                </div>

                @livewire('homepage.testimoni')
            </div>

        </div>
    </div>

    {{-- Container Footer --}}
    <div>
        @livewire('component.public.footer')
    </div>

    @livewireScripts
</body>

</html>
