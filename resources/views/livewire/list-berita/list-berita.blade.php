<div>
    <div class="lg:grid lg:grid-cols-4 gap-5 my-9">
        {{-- Dummy Berita 1 --}}
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-md shadow-slate-400">
            <figure><img
                    src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/10/Mumin-Prayoga-Koperasi-Konsumen-Equator-Praja-Nusantara-IPDN-Kampus-Kalbar.jpeg"
                    alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                    <a href="{{URL::to('berita/idBerita')}}" class="link link-neutral link-hover">Koperasi Equator Praja Nusantara Siap Gabung Koperasi Bina Bhakti Praja IPDN</a>
                    {{-- <div class="badge badge-secondary">NEW</div> --}}
                </h2>
                <div class="divider"></div>
                <p class="text-justify indent-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                    aliquid
                    quae asperiores saepe assumenda consectetur similique, omnis, architecto libero, nisi cumque est hic
                    ipsa voluptatum quos porro quia vel. Ea? . . . <a href="{{URL::to('berita/idBerita')}}"
                        class="link text-red-600 hover:text-orange-500 active:text-red-800">Baca Selengkapnya</a></p>
                <div class="flex-col items-end card-actions justify-end pt-5">
                    <div class="badge badge-outline">Humas IPDN Papua</div>
                    <div class="badge badge-outline">10 Maret 2023</div>
                </div>
            </div>
        </div>

        {{-- Dummy Berita 2 --}}
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-md shadow-slate-400">
            <figure><img
                    src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-01-at-11.02.51-750x500.jpg"
                    alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                    IPDN Kampus Kalbar Gelar Seminar Lokakarya
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
        <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-md shadow-slate-400">
            <figure><img
                    src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-13-at-5.10.44-PM.jpeg"
                    alt="Shoes" class="max-xl:rounded-md max-xl:h-full h-[6cm]" /></figure>
            <div class="card-body">
                <h2 class="card-title">
                    IPDN Kampus Kalbar Bagikan Bendera Merah Putih ke Masyarakat Sekitar Kampus
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

    {{-- Pagination --}}
    <div class="btn-group flex max-lg:justify-center lg:justify-end my-5">
        <button class="btn btn-accent shadow-md shadow-slate-500">«</button>
        <button class="btn btn-accent shadow-md shadow-slate-500">Page 22</button>
        <button class="btn btn-accent shadow-md shadow-slate-500">»</button>
    </div>
</div>
