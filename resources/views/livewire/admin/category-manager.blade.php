<div>
    {{-- In work, do what you enjoy. --}}

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

    {{-- Content Area --}}
    <div class="row">
        {{-- Data Table Category --}}
        <div class="col-md-8 mb-4">
            <div class="accordion w-100" id="accordion1">
                <div class="card shadow">
                    <div class="card-header" id="heading1">
                        <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                            aria-expanded="false" aria-controls="collapse1">
                            <strong>{{ __('Daftar Data Kategori') }}</strong>
                        </a>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <select name="sortBy" class="form-control" id="">
                                <option value="nama_ascending">{{ __('Nama A-Z') }}</option>

                                <option value="nama_descending">{{ __('Nama Z-A') }}</option>

                                <option value="tanggal_ascending">{{ __('Tanggal Dibuat A-Z') }}</option>

                                <option value="tanggal_descending">{{ __('Tanggal Dibuat Z-A') }}</option>

                            </select>
                        </div>

                        <table class="table table-hover" id="dataTable-category">
                            <thead>
                                <tr>
                                    <th>{{ __('Nama Kategori') }}</th>
                                    <th>{{ __('Dibuat Oleh') }}</th>
                                    <th>{{ __('Tanggal Pembuatan') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $data->NAME }}</td>
                                        <td>{{ $data->user['name'] }}</td>
                                        <td>{{ $data->CREATED_DATE }}</td>
                                        <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted sr-only">{{ __('Action') }}</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item"
                                                    wire:click='FormUpdate({{ $data->ID }})'>{{ __('Edit') }}</button>
                                                <button class="dropdown-item"
                                                    wire:click='SoftDelete({{ $data->ID }})'>
                                                    {{ __('Remove') }} </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        {{-- Form Add New and Edit Data Category --}}
        @if (false == $formOption)
            @livewire('component.admin.category-manager.form-add-category')
        @else
            @livewire('component.admin.category-manager.form-update-category')
        @endif
    </div>
</div>
