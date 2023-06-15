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
            <p class="flex justify-center font-medium"> {{ __('Daftar Kategori') }} </p>

            <div class="divider"></div>

            <ul class="list">
                @foreach ($category as $item)
                    <li class="mb-2">
                        <a href="{{ URL::to('kategori/') . '/' . $item->CATEGORY_ID }}"
                            class="link link-hover link-neutral">
                            {{ __($item->CATEGORY_NAME) }}
                        </a>
                    </li>
                @endforeach

                <li class="mb-2 mt-5">
                    <a href="{{ URL::to('kategori/') }}" class="link link-hover link-neutral">
                        {{ __('Lihat semua Kategori') }}
                    </a>
                </li>


            </ul>
        </div>

        <div class="divider mb-7 mt-14">
            <p class="font-thin"> {{ __('Berita Terkait') }} </p>
        </div>

        {{-- Berita Terkait --}}
        <ul class="list list-disc list-outside">
            @foreach ($recent_article as $item)
                <li class="mb-4">
                    <a href="{{ URL::to('post' . '/' . $item->ID) }}" class="link link-hover link-neutral">
                        {{ __($item->TITLE) }}
                    </a>
                </li>
            @endforeach
        </ul>
        {{-- End Berita Terbaru --}}

    </div>

</div>
