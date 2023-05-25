<div class="">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div class="flex flex-col xl:flex-row xl:flex-wrap">
        {{-- Dummy Berita 1 --}}
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-lg">
            <figure><img
                    src="{{ asset('image/berita/berita-papua-1.JPG') }}"
                    alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <a href="{{URL::to('/berita/idberita')}}" class="lik link-hover link-neutral">
                    <h2 class="card-title">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        {{-- <div class="badge badge-secondary">NEW</div> --}}
                    </h2>

                </a>
                <div class="divider"></div>
                <p class="text-justify indent-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    aliquid
                    quae asperiores saepe assumenda consectetur similique, omnis, architecto libero, nisi cumque est hic
                    ipsa voluptatum quos porro quia vel. Ea? . . . <a href="{{URL::to('berita/idBerita')}}"
                        class="link text-red-600 hover:text-orange-500 active:text-red-800" >Baca Selengkapnya</a></p>
                <div class="flex-col items-end card-actions justify-end pt-5">
                    <div class="badge badge-outline">Humas IPDN Papua</div>
                    <div class="badge badge-outline">10 Maret 2023</div>
                </div>
            </div>
        </div>

        {{-- Dummy Berita 2 --}}
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-lg">
            <figure><img
                src="{{ asset('image/berita/berita-papua-2.JPG') }}"
                alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                    IPDN Kampus Papua Gelar Seminar Lokakarya
                    {{-- <div class="badge badge-secondary">NEW</div> --}}
                </h2>
                <div class="divider"></div>
                <p class="text-justify indent-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    aliquid
                    quae asperiores saepe assumenda consectetur similique, omnis, architecto libero, nisi cumque est hic
                    ipsa voluptatum quos porro quia vel. Ea? . . . <a href=""
                        class="link text-red-600 hover:text-orange-500 active:text-red-800">Baca Selengkapnya</a></p>
                <div class="flex-col items-end card-actions justify-end pt-5">
                    <div class="badge badge-outline">Humas IPDN Papua</div>
                    <div class="badge badge-outline">10 Maret 2023</div>
                </div>
            </div>
        </div>

        {{-- Dummy Berita 3 --}}
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-lg">
            <figure><img
                src="{{ asset('image/berita/berita-papua-3.JPG') }}"
                alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                    IPDN Kampus Papua Bagikan Bendera Merah Putih ke Masyarakat Sekitar Kampus
                    {{-- <div class="badge badge-secondary">NEW</div> --}}
                </h2>
                <div class="divider"></div>
                <p class="text-justify indent-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    aliquid
                    quae asperiores saepe assumenda consectetur similique, omnis, architecto libero, nisi cumque est hic
                    ipsa voluptatum quos porro quia vel. Ea? . . . <a href=""
                        class="link text-red-600 hover:text-orange-500 active:text-red-800">Baca Selengkapnya</a></p>
                <div class="flex-col items-end card-actions justify-end pt-5">
                    <div class="badge badge-outline">Humas IPDN Papua</div>
                    <div class="badge badge-outline">10 Maret 2023</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Call To Action List Berita --}}
    <div class="flex justify-center my-4">
        <a href="{{ URL::to('/berita') }}"
            class="badge bg-gradient-to-r from-red-700 to-red-400 text-slate-300 py-6 px-9 hover:bg-gradient-to-r hover:from-blue-900 hover:to-blue-600 active:bg-red-600 font-semibold text-xl outline outline-offset-2 outline-double outline-yellow-500">
            Lihat Berita Lainya &nbsp;
            <x-tabler-arrow-big-right />
        </a>
    </div>

</div>
