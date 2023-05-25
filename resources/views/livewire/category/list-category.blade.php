<div class="grid grid-cols-1 gap-7 lg:mx-16">
    {{-- Do your work, then step back. --}}

    {{-- List Category --}}
    <div class="bg-base-200 bg-opacity-30 rounded-md border-slate-200 shadow-md py-3 px-5">
        {{-- Title Category --}}
        <div class="flex flex-row justify-between my-4">
            <div class="">
                <p class="font-medium">Judul Kategori Pertama</p>
            </div>

            <div class="">
                <a href="{{ URL::to('kategori/kategori1') }}" class="link link-hover hover:link-primary">Lihat Lebih
                    Banyak</a>
            </div>
        </div>

        {{-- List Berita --}}
        <div class="carousel space-x-2 rounded-box">
            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="{{ asset('image/berita/berita-papua-1.JPG') }}" alt="Berita 1" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="{{ asset('image/berita/berita-papua-2.JPG') }}" alt="Berita 2" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="{{ asset('image/berita/berita-papua-3.JPG') }}" alt="Berita 3" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/10/Mumin-Prayoga-Koperasi-Konsumen-Equator-Praja-Nusantara-IPDN-Kampus-Kalbar.jpeg"
                    alt="Berita 4" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-13-at-5.10.44-PM-750x500.jpeg"
                    alt="Berita 5" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>
        </div>
    </div>


    {{-- List Category --}}
    <div class="bg-base-200 bg-opacity-30 rounded-md border-slate-200 shadow-md py-3 px-5">
        {{-- Title Category --}}
        <div class="flex flex-row justify-between my-4">
            <div class="">
                <p class="font-medium">Judul Kategori Kedua</p>
            </div>

            <div class="">
                <a href="{{ URL::to('kategori/kategori2') }}" class="link link-hover hover:link-primary">Lihat Lebih
                    Banyak</a>
            </div>
        </div>

        {{-- List Berita --}}
        <div class="carousel space-x-2 rounded-box">
            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2023/03/IMG_7115-750x500.jpg" alt="Berita 1"
                    class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2023/03/IMG-20230313-WA0015-750x500.jpg"
                    alt="Berita 2" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-01-at-11.02.51-750x500.jpg"
                    alt="Berita 3" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/10/Mumin-Prayoga-Koperasi-Konsumen-Equator-Praja-Nusantara-IPDN-Kampus-Kalbar.jpeg"
                    alt="Berita 4" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>

            <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                <img src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-13-at-5.10.44-PM-750x500.jpeg"
                    alt="Berita 5" class="w-full" />

                {{-- Title --}}
                <a href="{{ URL::to('/berita/idBerita') }}"
                    class="font-medium px-5 my-5 link link-hover hover:link-primary">Ini Judul Berita</a>
            </div>
        </div>
    </div>

    {{-- Loader --}}
    <div class="flex justify-center">
        <button class="bg-accent p-4 rounded-btn font-light text-sm hover:bg-base-200 hover:font-medium">
            Muat Lebih Banyak
        </button>
    </div>

</div>
