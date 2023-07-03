<div>
    {{-- The Master doesn't talk, he acts. --}}

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

    <div class="row">
        {{-- Form Left Side --}}
        <div class="col-md-6">
            <form wire:submit.prevent='SettingGeneral'>
                <div class="card shadow">
                    {{-- Card Header --}}
                    <div class="card-header">
                        <strong class="card-title">{{ __('Form Pengaturan General') }}</strong>
                        <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body my-n2">
                        {{-- Nama Regional --}}
                        <div class="form-group">
                            <label for="inputRegional">{{ __('Nama Regional Kampus Daerah') }}</label>
                            <input type="text" class='form-control file-input' wire:model='inputRegional'>
                        </div>

                        {{-- Director Campus Regional Name --}}
                        <div class="form-group">
                            <label for="inputHymne"> {{ __('Nama Direktur Kampus Regional') }} </label>
                            <input type="text" class='form-control' wire:model='inputDirectorName'>
                        </div>

                        {{-- Foreword from Director --}}
                        <div class="form-group">
                            <label for="inputForeword"> {{ __('Pesan Sambutan Direktur') }} </label>
                            <textarea wire:model='inputForeword' class='form-control' rows="10"></textarea>
                        </div>

                        {{-- URL Mars --}}
                        <div class="form-group">
                            <label for="inputMars"> {{ __('Tautan URL Mars IPDN') }} </label>
                            <input type="text" wire:model='inputMars' class='form-control'>
                        </div>

                        {{-- URL Mars --}}
                        <div class="form-group">
                            <label for="inputHymne"> {{ __('Tautan URL Hymne IPDN') }} </label>
                            <input type="text" wire:model='inputHymne' class='form-control'>
                        </div>

                        <button type="submit" class="btn btn-info"> {{ __('Simpan Perubahan') }} </button>
                    </div>
                </div>
            </form>
        </div>

        {{-- Form Right Side --}}
        <div class="col-md-6">
            <div class="card shadow">

                {{-- Card Header --}}
                <div class="card-header">
                    <strong class="card-title">{{ __('Form Foto Direktur') }}</strong>
                    <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                </div>

                {{-- Card Body --}}
                <div class="card-body my-n2">
                    {{-- Nama Regional --}}
                    <div class="form-group">
                        <label for="inputPhotoDirector"> {{ __('Foto Directur') }} </label>
                        <div class="row">

                            <div class="col-md-9">
                                <input type="file" wire:model='inputPhotoDirector' class='form-control file-input'>
                            </div>

                            <div class="col-md-3">
                                <button class='btn btn-info form-control '>
                                    <span class='fe fe-upload'></span>
                                    {{ __('Unggah') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
