{{-- Close your eyes. Count to one. That is how long forever feels. --}}

@push('style')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
@endpush

<div>
    {{-- Alert for success feedback from backend --}}
    @if (session()->has('success'))
        <div class="alert alert-primary shadow-lg alert-dismissible fade show" role="alert">
            <i class="fe fe-check-circle"></i>
            <span>
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </div>
    @endif

    {{-- Alert for failed or errors feedback from backend --}}
    @if (session()->has('error'))
        <div class="alert alert-danger shadow-lg alert-dismissible fade show" role="alert">
            <i class="fe fe-x-circle"></i>
            <span>
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </div>
    @endif

    <form wire:submit.prevent="updateArticle">
        <div class="row">

            {{-- Editor Area --}}
            <div class="col-md-8">
                <div class="accordion w-100" id="accordion1">
                    <div class="card shadow">
                        <div class="card-header" id="heading1">
                            <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                aria-expanded="false" aria-controls="collapse1">
                                <strong>{{ __('Formulir Pembuatan Artikel') }}</strong>
                            </a>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">

                                    {{-- Input Title --}}
                                    <div class="form-group">
                                        <input type="text" wire:model='inputTitle' class="form-control col-md-6"
                                            value="{{ $data->ARTICLE_TITLE }}" required>
                                    </div>

                                    {{-- Input Content --}}
                                    <div class="form-group" wire:ignore>
                                        <textarea id="inputContent" class="form-control rounded-sm">{!! $data->ARTICLE_CONTENT !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sidebar Area --}}
            <div class="col-md-4">
                <div class="accordion w-100" id="accordion1">

                    <div class="grid grid-cols-1">

                        {{-- Action Option --}}
                        <div class="">
                            <div class="form-group">
                                <button type="button" class="btn btn-accent">Draft</button>
                                &nbsp;
                                <button type="submit" id="updateArticle" class="btn btn-info">Tayangkan</button>
                            </div>
                        </div>

                        {{-- Select Category --}}
                        <div class="card shadow">
                            {{-- Header Card --}}
                            <div class="card-header" id="heading1">
                                <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                    <strong>{{ __('Pilihan Kategori') }}</strong>
                                </a>
                            </div>

                            {{-- Body Card --}}
                            <div class="card-body">
                                {{-- Select Category --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select wire:model='inputCategory' class="form-control" wire:ignore>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $item)
                                                    @if ($inputCategory == $item->CATEGORY_ID)
                                                        <option value="{{ $item->CATEGORY_ID }}" selected>
                                                            {{ $item->CATEGORY_NAME }}</option>
                                                    @else
                                                        <option value="{{ $item->CATEGORY_ID }}">
                                                            {{ $item->CATEGORY_NAME }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Divider --}}
                        <div class="">&nbsp;</div>

                        {{-- Thumbnails --}}
                        <div class="card shadow">
                            <div class="card-header" id="heading1">
                                <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                    <strong>{{ __('Gambar Keluku/') }}<i>Thumbnail</i></strong>
                                </a>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <input type="file" wire:model='inputThumbnail'
                                                class="form-control form-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            const content = CKEDITOR.replace('inputContent');
            content.on('change', function(event) {
                console.log(event.editor.getData())
                @this.set('inputContent', event.editor.getData())
            })

            $('#addNew').click(function(event) {
                CKEDITOR.instances['inputContent'].setData('')
            })
        })
    </script>
@endpush
