@extends('layouts.admin', [
    'title' => 'Daftar Kategori - IPDN Kampus Daerah',
    'page_name' => 'Postingan Website Kampus Daerah',
]);

@section('content')
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
            <div class="accordion w-100" id="accordion1">
                <div class="card shadow">
                    <div class="card-header" id="heading1">
                        <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                            aria-expanded="false" aria-controls="collapse1">
                            <strong>{{ __('Daftar Data Postingan') }}</strong>
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <select wire:model="inputSort" class="form-control col-md-3" id="inputSort">
                                    <option value="">{{ __('Urutan Data:') }}</option>
                                    <option value="asc_name">{{ __('Nama A-Z') }}</option>

                                    <option value="desc_name">{{ __('Nama Z-A') }}</option>

                                    <option value="asc_date">{{ __('Tanggal Dibuat A-Z') }}</option>

                                    <option value="desc_date">{{ __('Tanggal Dibuat Z-A') }}</option>

                                </select>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fe fe-search" id="inputGroupPrepend"></span>
                                    </div>
                                    <input type="text" wire:model='inputSearch' class="form-control"
                                        id="validationCustomUsername" aria-describedby="inputGroupPrepend">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
