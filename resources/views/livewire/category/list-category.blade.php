<div class="grid grid-cols-1 gap-7 lg:mx-16">
    {{-- Do your work, then step back. --}}

    {{-- List Category --}}
    @foreach ($data as $item)
        <div class="bg-base-200 bg-opacity-30 rounded-md border-slate-200 shadow-md py-3 px-5">
            {{-- Title Category --}}
            <div class="flex flex-row justify-between my-4">
                <div class="">
                    <p class="font-medium">
                        {{ __('Kategori ') . $item->CATEGORY_NAME }}
                    </p>
                </div>

                <div class="">
                    <a href="{{ URL::to('kategori/kategori1') }}" class="link link-hover hover:link-primary">
                        {{ __('Lihat Lebih Banyak') }}
                    </a>
                </div>
            </div>

            {{-- List Berita --}}
            <div class="carousel space-x-2 rounded-box">
                @for ($i = 0; $i < 4; $i++)
                    {{-- Thumbnail And Title Article --}}
                    <div class="carousel-item w-1/3 bg-white grid grid-flow-row rounded-md">
                        {{-- Thumbnail --}}
                        <img src="{{ asset('image/article') . '/' . $item->article[$i]->ARTICLE_THUMBNAIL }}"
                            alt="{{ $item->article[$i]->ARTICLE_THUMBNAIL }}" class="w-full" />

                        {{-- Title --}}
                        <a href="{{ URL::to('/post') . '/' . $item->article[$i]->ARTICLE_ID }}"
                            class="font-medium px-5 my-5 link link-hover hover:link-primary">
                            {{ __($item->article[$i]->ARTICLE_TITLE) }}
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    @endforeach

    {{-- Loader --}}
    <div class="flex justify-center">
        <button class="bg-accent p-4 rounded-btn font-light text-sm hover:bg-base-200 hover:font-medium"
            wire:click='ShowMore()'>
            {{ __('Muat Lebih Banyak') }}
        </button>
    </div>

</div>
