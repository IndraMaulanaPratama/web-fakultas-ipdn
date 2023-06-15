<div>
    <div class="lg:grid lg:grid-cols-4 gap-5 my-9">
        @foreach ($data as $item)
            <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-md shadow-slate-400">
                <figure>
                    <img src=" {{ asset('image/article' . '/' . $item->ARTICLE_THUMBNAIL) }} "
                        alt="{{ $item->ARTICLE_THUMBNAIL }}" class="max-xl:rounded-md max-xl:h-full h-[6cm]" />
                </figure>

                <div class="card-body">
                    <div class="card-title">
                        <h2>
                            <a href="{{ URL::to('post') . '/' . $item->ARTICLE_ID }}"
                                class="link link-neutral link-hover">
                                {{ __($item->ARTICLE_TITLE) }}
                            </a>
                        </h2>
                    </div>

                    <div class="divider"></div>

                    <p class="text-justify indent-4">
                        {!! __(Str::substr($item->ARTICLE_CONTENT, 0, 155)) !!} ... </br>
                        <a href="{{ URL::to('post') . '/' . $item->ARTICLE_ID }}"
                            class="link text-red-600 hover:text-orange-500 active:text-red-800">
                            {{ __('Baca Selengkapnya') }}
                        </a>
                    </p>

                    <div class="flex-col items-end card-actions justify-end pt-5">
                        <div class="badge badge-outline"> {{ $item->user->name }} </div>
                        <div class="badge badge-outline">
                            {{ __(date('d-F-Y', strtotime($item->ARTICLE_UPDATED_AT))) }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="btn-group flex max-lg:justify-center lg:justify-end my-5">
        <button class="btn btn-accent shadow-md shadow-slate-500" wire:click='loadmore'>
            {{ __('Muat Lebih Banyak') }}
        </button>
    </div>
</div>
