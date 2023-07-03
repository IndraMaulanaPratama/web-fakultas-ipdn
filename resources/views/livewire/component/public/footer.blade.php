<div>
    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        {{-- <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div> --}}

        {{-- Maps dan Kontak --}}
        <div>
            <div class="first-letter:bg-slate-100 lg:grid lg:grid-flow-col lg:gap-8">
                <div class="max-md:my-7 grid content-center">
                    {{-- Instagram --}}
                    <div class="grid grid-flow-col text-slate-600 my-1 justify-start">
                        <x-feathericon-instagram class="w-6 m-1" />
                        <p class="text-base p-1"><a href="https://instagram.com/{{ $data->CONTACT_INSTAGRAM }}"
                                target="blank">humas ipdn</a></p>
                    </div>

                    {{-- Email --}}
                    <div class="grid grid-flow-col text-slate-600 my-1 justify-start">
                        <x-fontisto-email class="w-6 m-1" />
                        <p class="text-base p-1">{{ $data->CONTACT_EMAIL }}@ipdn.ac.id</p>
                    </div>

                    {{-- Telepon --}}
                    <div class="grid grid-flow-col text-slate-600 my-1 justify-start">
                        <x-heroicon-o-phone-arrow-up-right class="w-6 m-1" />
                        <p class="text-base p-1"><b>Tel:</b> {{ $data->CONTACT_TELEPHONE }} </p>
                    </div>

                    {{-- Fax --}}
                    <div class="grid grid-flow-col text-slate-600 my-1 justify-start">
                        <x-feathericon-phone-call class="w-6 m-1" />
                        <p class="text-base p-1"><b>Fax:</b> {{ $data->CONTACT_FAX }} </p>
                    </div>

                    {{-- Lokasi --}}
                    <div class="grid grid-flow-col text-slate-600 my-1 lg:w-96 justify-start">
                        <div class="p-1">
                            <x-akar-location class="w-6" />
                        </div>
                        <p class="text-base lg:p-1 text-justify"> {{ $data->CONTACT_ADDRESS }} </p>
                    </div>
                </div>

                <div class="divider divider-horizontal"> </div>

                <div class="max-lg:my-10">
                    <iframe
                        src="{{ $data->CONTACT_MAPS }}"
                        style="border:0;" class="sm:w-[480px] sm:h-[120px] md:w-[480px] md:h-[240px] rounded-md"
                        allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>

        {{-- Copyright --}}
        <div class="mt-12 font-thin">
            <p>Copyright © 2023 - Institut Pemerintahan Dalam Negri</p>
        </div>
    </footer>
</div>
