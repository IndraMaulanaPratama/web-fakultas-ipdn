<div>
    {{-- The Master doesn't talk, he acts. --}}

    {{-- Alert for success feedback from backend --}}
    @if (session()->has('success'))
        <div class="alert alert-primary shadow-lg alert-dismissible fade show" role="alert"">
            <i class="fe fe-check-circle"></i>

            {{ session('success') }}

            <span>
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
            <div class="card shadow">
                <div class="card-header">
                    <strong class="card-title">{{ __('Form Pengaturan General') }}</strong>
                    <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                </div>
                <div class="card-body my-n2">
                    {{-- Nama Regional --}}
                    <div class="form-group">
                        <label for="inputRegional">{{ __('Nama Regional Kampus Daerah') }}</label>
                        <input type="text" class='form-control file-input' wire:model='inputRegional'
                            placeholder="Contoh: Jatinangor">
                    </div>

                    {{-- Header Application --}}
                    <div class="form-group">
                        <label for="inputHymne"> {{ __('Gambar Header Aplikasi') }} </label>
                        <div class="row">
                            <div class="col-md-10">
                                <input type="file" class='form-control' wire:model='inputHeader'>
                            </div>

                            <div class="col-md-2">
                                <button class='btn btn-primary form-control'>
                                    <span class="fe fe-14 fe-upload"></span>
                                    {{ __('Unggah') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Form Right Side --}}
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    {{-- <strong class="card-title">{{ __('Form Pengaturan General') }}</strong> --}}
                    <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                </div>
                <div class="card-body my-n2">
                    {{-- Nama Regional --}}
                    <div class="form-group">
                        <label for="inputRegional">Nama Regional Kampus Daerah</label>
                        <input type="text" class='form-control' wire:model='inputRegional'
                            placeholder="Contoh: Jatinangor">
                    </div>

                    {{-- URL Mars --}}
                    <div class="form-group">
                        <label for="inputMars">Tautan Video Mars</label>
                        <input type="text" class='form-control' wire:model='inputMars' placeholder="https://">
                    </div>

                    {{-- URL Hymne --}}
                    <div class="form-group">
                        <label for="inputHymne">Tautan Video Hymne</label>
                        <input type="text" class='form-control' wire:model='inputHymne' placeholder="https://">
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
