<div class="grid lg:mx-20 max-lg:grid-cols-1 lg:grid-cols-4 gap-5">

    {{-- Berita --}}
    <div class="bg-base-100 grid lg:col-span-3 mx-5 max-lg:mx-4 rounded-md shadow-md">

        {{-- Image Header --}}
        <figure>
            <img src="{{ asset('image/article') . '/' . $data->ARTICLE_THUMBNAIL }}" alt="" class="rounded-md">
        </figure>

        <div class="p-8">
            {{-- Title --}}
            <p class="font-bold text-xl my-5">
                {{ $data->ARTICLE_TITLE }}
            </p>

            {{-- Berita --}}
            <div class="text-justify indent-4 leading-relaxed tracking-normal line-clamp-4">
                {!! $data->ARTICLE_CONTENT !!}
            </div>


        </div>

    </div>

    {{-- Sidebar --}}
    <div class=" rounded-md mx-5 max-lg:my-3">
        {{-- <div class="divider mb-7">
            <p class="font-thin">Category</p>
        </div> --}}

        {{-- List Category --}}
        <div class="flex flex-col border border-base-200 border-opacity-75 shadow-md rounded-md p-5">
            <p class="flex justify-center font-medium">Daftar Kategori</p>

            <div class="divider"></div>

            <ul class="list">
                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-pertama') }}" class="link link-hover link-neutral">kategori
                        Pertama</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-kedua') }}" class="link link-hover link-neutral">kategori
                        Kedua</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-ketiga') }}" class="link link-hover link-neutral">kategori
                        Ketiga</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-keempat') }}" class="link link-hover link-neutral">kategori
                        Keempat</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-kelima') }}" class="link link-hover link-neutral">kategori
                        Kelima</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-keenam') }}" class="link link-hover link-neutral">kategori
                        Keenam</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-ketujuh') }}" class="link link-hover link-neutral">kategori
                        Ketujuh</a>
                </li>

                <li class="mb-2 mt-5">
                    <a href="{{ URL::to('kategori/') }}" class="link link-hover link-neutral">Lihat semua Kategori</a>
                </li>


            </ul>
        </div>

        <div class="divider mb-7 mt-14">
            <p class="font-thin">Berita Terkait</p>
        </div>

        {{-- Berita Terkait --}}
        <ul class="list list-disc list-outside">
            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-pertama') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    pertama</a>
            </li>

            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-kedua') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    kedua</a>
            </li>

            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-ketiga') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    ketiga</a>

            </li>
        </ul>
        {{-- End Berita Terbaru --}}

    </div>

</div>
