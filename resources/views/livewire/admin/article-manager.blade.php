@extends('layouts.admin', [
    'title' => 'Daftar Kategori - IPDN Kampus Daerah',
    'page_name' => 'Postingan Website Kampus Daerah',
]);

@section('content')

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
