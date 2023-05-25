<div>
    {{-- The whole world belongs to you. --}}

    {{-- Container Berita --}}
    <div class="my-5 lg:mx-36">
        {{-- Content --}}
        <div class="grid justify-center items-center">

            {{-- Berita --}}
            <div class="">
                {{-- Header Section Berita --}}
                <div class="grid justify-center mb-4">
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
</div>
