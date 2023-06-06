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

                        {{-- Data Table Area --}}
                        @livewire('component.admin.article-manager.data-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
