<div>
    <div class="lg:grid lg:grid-cols-4 gap-5 my-9">

        @foreach ($data as $item)
            {{-- Dummy Berita 1 --}}
            <div class="card bg-base-100 max-xl:my-5 xl:m-2 w-full xl:w-96 xl:shadow-xl shadow-md shadow-slate-400">
                <figure><img src="{{ asset('image/article' . '/' . $item->ARTICLE_THUMBNAIL) }}" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        <a href="{{ URL::to('post') . '/' . $item->ARTICLE_ID }}" class="link link-neutral link-hover">
                            {{ __($item->ARTICLE_TITLE) }} </a>
                        {{-- <div class="badge badge-secondary">NEW</div> --}}
                    </h2>

                    <div class="divider"></div>

                    <p class="text-justify indent-4">
                        {{ Str::substr($item->ARTICLE_CONTENT, 0, 155) }}
                        <a href="{{ URL::to('post') . '/' . $item->ARTICLE_ID }}"
                            class="link text-red-600 hover:text-orange-500 active:text-red-800">Baca Selengkapnya</a>
                    </p>
                    <div class="flex-col items-end card-actions justify-end pt-5">
                        <div class="badge badge-outline"> {{ $item->user->name }}</div>
                        <div class="badge badge-outline"> {{ __(date('d-F-Y', strtotime($item->ARTICLE_UPDATED_AT))) }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{-- Pagination --}}
    <div class="btn-group flex max-lg:justify-center lg:justify-end my-5">
        <button class="btn btn-accent shadow-md shadow-slate-500" wire:click='ShowMore'>
            Muat Lebih Banyak
        </button>
    </div>
</div>
