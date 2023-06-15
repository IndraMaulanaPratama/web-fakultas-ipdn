<div class="">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    {{-- CARD BERITA --}}
    <div class="flex flex-col xl:flex-row xl:flex-wrap">
        @foreach ($data as $item)
            <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-lg">

                {{-- Thumbnail Article --}}
                <figure>
                    <img src="{{ asset('image/article'). '/'.$item->ARTICLE_THUMBNAIL }}" alt="{{ $item->ARTICLE_THUMBNAIL }}"
                        class="max-xl:rounded-md max-xl:h-full h-[6cm]" />
                </figure>

                {{-- Body Article --}}
                <div class="card-body">

                    {{-- Title Article --}}
                    <h2 class="card-title">
                        <a href="{{ URL::to('/berita/idberita') }}" class="lik link-hover link-neutral">
                            {{ $item->ARTICLE_TITLE }}
                        </a>
                    </h2>

                    <div class="divider"></div>

                    {{-- Content Article --}}
                    <p class="text-justify indent-4">
                        {{-- Content Text --}}
                        {!! Str::substr($item->ARTICLE_CONTENT, 0, 125) !!}

                        {{-- Call to Action See Detail Article --}}
                        <a href="{{ URL::to('post/'. $item->ARTICLE_ID) }}"
                            class="link text-red-600 hover:text-orange-500 active:text-red-800">
                            {{ __('Baca Selengkapnya') }}
                        </a>
                    </p>

                    {{-- Footer Article (Name, Date Time) --}}
                    <div class="flex-col items-end card-actions justify-end pt-5">
                        {{-- Author Article --}}
                        <div class="badge badge-outline">
                            {{ $item->user->name }}
                        </div>

                        {{-- Date Time Post --}}
                        <div class="badge badge-outline">
                            {{ date('d-m-Y', strtotime($item->ARTICLE_UPDATED_AT)) }}
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>

    {{-- Call To Action List Berita --}}
    <div class="flex justify-center my-4">
        <a href="{{ URL::to('/berita') }}"
            class="badge bg-gradient-to-r from-red-700 to-red-400 text-slate-300 py-6 px-9 hover:bg-gradient-to-r hover:from-blue-900 hover:to-blue-600 active:bg-red-600 font-semibold text-xl outline outline-offset-2 outline-double outline-yellow-500">
            {{ __('Lihat Berita Lainya') }} &nbsp;
            <x-tabler-arrow-big-right />
        </a>
    </div>

</div>
