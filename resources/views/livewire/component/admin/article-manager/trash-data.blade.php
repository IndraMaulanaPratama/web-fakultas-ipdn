{{-- The whole world belongs to you. --}}
{{-- The Master doesn't talk, he acts. --}}

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

    <div class="row">
        <div class="col-md-12">
            <div class="accordion accordion-boxed" id="accordion2">
                {{-- Data Article --}}
                <div class="card shadow">
                    {{-- Header --}}
                    <div class="card-header" id="headingOne">
                        <a role="button" href="#collapseOne" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            <strong>{{ __('Daftar Data Artikel') }}</strong>
                        </a>
                    </div>

                    {{-- Body --}}
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                        <div class="card-body">

                            {{-- Settings Data Table Area --}}
                            <div class="row">

                                {{-- Sort By --}}
                                <div class="col-md-2">
                                    <select wire:model="inputSort" class="form-control" id="inputSort">
                                        <option value="">{{ __('Urutan Data:') }}</option>
                                        <option value="asc_title">{{ __('Judul A-Z') }}</option>
                                        <option value="desc_title">{{ __('Judul Z-A') }}</option>
                                        <option value="asc_date">{{ __('Tanggal Dibuat A-Z') }}</option>
                                        <option value="desc_date">{{ __('Tanggal Dibuat Z-A') }}</option>

                                    </select>
                                </div>

                                {{-- Filter Status --}}
                                <div class="col-md-2">
                                    <select wire:model="inputStatus" class="form-control" id="inputStatus">
                                        <option value="">{{ __('Status:') }}</option>
                                        <option value="">{{ __('Semua Data') }}</option>
                                        <option value="1">{{ __('Tayang') }}</option>
                                        <option value="2">{{ __('Draft') }}</option>
                                    </select>
                                </div>

                                {{-- Filter Category --}}
                                <div class="col-md-5">
                                    <select wire:model="inputCategory" class="form-control col-md-4" id="inputCategory">
                                        <option value="">{{ __('Kategori:') }}</option>
                                        <option value="">{{ __('Semua Data') }}</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->CATEGORY_ID }}">{{ $item->CATEGORY_NAME }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                {{-- Search Input --}}
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text fe fe-search" id="inputGroupPrepend"></span>
                                        </div>
                                        <input type="text" wire:model='inputSearch' class="form-control"
                                            id="validationCustomUsername" aria-describedby="inputGroupPrepend">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">&nbsp;</div>

                            {{-- Data Table --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover" id="dataTable-category">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Judul Postingan') }}</th>
                                                <th>{{ __('Kategori') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Dibuat Oleh') }}</th>
                                                <th>{{ __('Tanggal Pembuatan') }}</th>
                                                <th>{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($paginate as $data)
                                                <tr>
                                                    <td>{{ $data->ARTICLE_TITLE }}</td>
                                                    <td>{{ $data->category['CATEGORY_NAME'] }}</td>
                                                    <td>{{ 1 == $data->ARTICLE_STATUS ? 'Tayang' : 'Draft' }}</td>
                                                    <td>{{ $data->user['name'] }}</td>
                                                    <td>{{ $data->CREATED_DATE }}</td>
                                                    <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted sr-only">{{ __('Action') }}</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="{{ url('postingan/edit/' . $data->ID) }}"
                                                                class="dropdown-item">{{ __('Edit') }}
                                                            </a>

                                                            <button class="dropdown-item"
                                                                wire:click='SoftDelete({{ $data->ID }})'>{{ __('Remove') }}
                                                                </buton>
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

                {{-- Data Category --}}
                <div class="card shadow">
                    <div class="card-header" id="headingTwo">
                        <a role="button" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <strong>{{ __('Daftar Data Kategori') }}</strong>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                        <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                            terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>