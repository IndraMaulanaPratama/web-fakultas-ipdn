<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

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
        <div class="col-md-12">
            <form wire:submit.prevent='SettingContact'>
                <div class="card shadow">
                    {{-- Card Header --}}
                    <div class="card-header">
                        <strong class="card-title">{{ __('Form Pengaturan Kontak') }}</strong>
                        <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">

                            {{-- Left Side --}}
                            <div class="col-md-6">
                                {{-- Input Instagram --}}
                                <div class="form-group">
                                    <label for="inputInstagram"> {{ __('URL Sosial Media Instagram') }} </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"
                                                id="inputInstagram">https://www.instagram.com/</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url"
                                            aria-describedby="inputInstagram" wire:model='inputInstagram'>
                                    </div>
                                </div>

                                {{-- Input Email --}}
                                <div class="form-group">
                                    <label for="InputEmail"> {{ __('Alamat Surat Elektronik (Email)') }} </label>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control col-md-6"
                                            aria-label="Recipient's username" aria-describedby="inputEmail"
                                            wire:model='inputEmail'>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="inputEmail">@ipdn.ac.id</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- Input Phone --}}
                                <div class="form-group">
                                    <label for="inputPhone"> {{ __('Nomor Telepon') }} </label>
                                    <input class="form-control col-md-4 input-phoneus" wire:model='inputPhone'>
                                </div>

                                {{-- Input Fax --}}
                                <div class="form-group">
                                    <label for="inputFax"> {{ __('Nomor Fax') }} </label>
                                    <input class="form-control col-md-4 input-phoneus" wire:model='inputFax'>
                                </div>
                            </div>

                            {{-- Right Side --}}
                            <div class="col-md-6">
                                {{-- Input Address --}}
                                <div class="form-group">
                                    <label for="inputAddress">{{ __('Alamat Lengkap') }}</label>
                                    <textarea class='form-control' rows="3" wire:model='inputAddress'></textarea>
                                </div>

                                {{-- Input Maps --}}
                                <div class="form-group">
                                    <label for="inputMaps">{{ __('Tautan Maps') }}</label>
                                    <textarea class='form-control' rows="3" wire:model='inputMaps'></textarea>
                                </div>

                                {{-- Buttton Submit --}}
                                &nbsp;
                                <button type="submit" class="btn btn-lg btn-secondary form-control">
                                    {{ __('Simpan Perubahan') }}
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
