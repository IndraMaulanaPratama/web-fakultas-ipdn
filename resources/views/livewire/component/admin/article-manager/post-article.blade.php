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

    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit.prevent="AddNew">
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

                                    <div class="form-group">
                                        <input type="text" wire:model='inputTitle' class="form-control col-md-6"
                                            placeholder="Judul Artikel" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="" wire:ignore>
                                            <textarea id="inputContent"></textarea>
                                        </div>
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
                                <button type="submit" id="addNew" class="btn btn-info">Tayangkan</button>
                            </div>
                        </div>

                        <hr>

                        {{-- Select Category --}}
                        <div class="card shadow">
                            <div class="card-header" id="heading1">
                                <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                    <strong>{{ __('Pilihan Kategori') }}</strong>
                                </a>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <select wire:model='inputCategory' class="form-control" required>
                                                <option value="">Pilih Kategori</option>
                                                @foreach ($category as $item)
                                                    <option value="{{ $item->CATEGORY_ID }}"> {{ $item->CATEGORY_NAME }}
                                                    </option>
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
                                            @error('inputThumbnail')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
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
</div>
