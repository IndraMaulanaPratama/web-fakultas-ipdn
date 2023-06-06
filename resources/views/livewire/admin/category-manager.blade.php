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


                        {{-- Data Table Area --}}
                        <div class="row">
                            <div class="col-md-8">
                                <select wire:model="inputSort" class="form-control col-md-3" id="inputSort">
                                    <option value="">Urutan Data:</option>
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

                        {{-- Data Table --}}
                        <div class="row mt-4">
                            <div class="col-md-12">
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
                                        @foreach ($paginate as $data)
                                            <tr>
                                                <td>{{ $data->NAME }}</td>
                                                <td>{{ $data->user['name'] }}</td>
                                                <td>{{ $data->CREATED_DATE }}</td>
                                                <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">{{ __('Action') }}</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="dropdown-item"
                                                            wire:click='FormUpdate({{ $data->ID }})'>{{ __('Edit') }}
                                                        </button>
                                                        <button class="dropdown-item"
                                                            wire:click='SoftDelete({{ $data->ID }})'>{{ __('Remove') }}
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                                <hr class="pb-5">
                                {{ $paginate->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Form Add New and Edit Data Category --}}
        @if ('add' == $formOption || true == $formOption)
            @livewire('component.admin.category-manager.form-add-category')
        @elseif('update' == $formOption)
            @livewire('component.admin.category-manager.form-update-category')
        @endif
    </div>
</div>
