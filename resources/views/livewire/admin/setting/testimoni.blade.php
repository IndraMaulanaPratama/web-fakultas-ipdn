<div>
    {{-- Success is as dangerous as failure. --}}

    {{-- Alert for success feedback from backend --}}
    @if (session()->has('success'))
        <div class="alert alert-primary shadow-lg alert-dismissible fade show" role="alert">
            <i class="fe fe-x-circle"></i>
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

    {{-- Form Edit Testimoni --}}
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow" wire:ignore>
                <form wire:submit.prevent='ProcessUpdate'>
                    {{-- Card Header --}}
                    <div class="card-header">
                        <strong class="card-title">{{ __('Edit Data Testimoni ') }}</strong>
                        <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body my-n2">
                        {{-- Row For Name and Batch Praja --}}
                        <div class="row">
                            {{-- Name of Praja --}}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputName"> {{ __('Nama Praja:') }} </label>
                                    <input type="text" wire:model='inputName' class='form-control'>
                                </div>
                            </div>

                            {{-- Batch Praja --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="inputBatch"> {{ __('Angkatan:') }} </label>
                                    <input type="number" wire:model='inputBatch' min="1956"
                                        max="{{ date('Y') }}" class='form-control'>
                                </div>
                            </div>
                        </div>

                        {{-- Text Testimoni --}}
                        <div class="form-group">
                            <label for="inputTestimoni"> {{ __('Testimoni') }} </label>
                            <textarea wire:model='inputTestimoni' rows="6" class='form-control'></textarea>
                        </div>

                        <input type="hidden" wire:model='inputId' class='form-control'>

                        <hr />
                        <button type="submit" class="btn btn-info">
                            {{ __('Simpan Perubahan') }}
                        </button>

                        &nbsp;

                        <button type="submit" class="btn btn-accent" wire:click='ClearForm'>
                            {{ __('Batalkan') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr />

    {{-- Card Data Testimoni --}}
    <div class="row">
        @php
            $no = 0;
        @endphp

        {{-- Testimoni 1st --}}
        @foreach ($data as $item)
            @php
                $no++;
            @endphp

            <div class="col-md-4">
                <div class="card shadow">
                    {{-- Card Header --}}
                    <div class="card-header">
                        <strong class="card-title">{{ __('Form Testimoni ') . $no }}</strong>
                        <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body my-n2">
                        {{-- Name of Praja --}}
                        <p> <b>Nama Praja: </b> {{ $item->TESTIMONI_USERNAME }} </p>

                        {{-- Batch Praja --}}
                        <p class='text-justify'> <b>Angkatan: </b> {{ $item->TESTIMONI_BATCH }} </p>

                        {{-- Text Testimoni --}}
                        <b>Konten Testimoni:</b>
                        <p class='text-justify'> {{ $item->TESTIMONI_CONTENT }} </p>

                        <hr />
                        <button type="submit" wire:click='FormEdit({{ $item->TESTIMONI_ID }})' class="btn btn-info">
                            {{ __('Ubah Data') }}
                        </button>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
