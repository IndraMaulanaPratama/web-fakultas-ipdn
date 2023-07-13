<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

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

    <div class="row">
        <div class="col-md-12">
            <div class="card show">

                {{-- Header Card Data Menu --}}
                <div class="card-header">
                    <strong class='card-title'> {{ __('Data Menu') }} </strong>
                </div>

                {{-- Body Card Data Menu --}}
                <div class="card-body my-2">

                    {{-- Filter Table Area --}}
                    <div id="filter-table" class='my-2'>
                        <div class="row">

                            {{-- Search Column --}}
                            <div class="col-md-2">
                                <input type="text" wire:model="inputSearch" class="form-control"
                                    placeholder="Pencarian Menu">
                            </div>

                            {{-- Sort Data --}}
                            <div class="col-md-2">
                                <select wire:model='inputSort' class='form-control'>
                                    <option value="">Urutkan Berdasarkan</option>
                                    <option value="asc-name">Nama A-Z</option>
                                    <option value="desc-name">Nama Z-A</option>
                                    <option value="asc-date">Tanggal Pembuatan A-Z</option>
                                    <option value="desc-date">Tanggal Pembuatan Z-A</option>
                                </select>
                            </div>

                            {{-- Limit Data --}}
                            <div class="col-md-1">
                                <select wire:model='inputLimit' class='form-control'>
                                    <option value="10">10 Data</option>
                                    <option value="15">15 Data</option>
                                    <option value="20">20 Data</option>
                                    <option value="30">30 Data</option>
                                    <option value="50">50 Data</option>
                                    <option value="100">100 Data</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    {{-- DATA MENU --}}
                    <div id="data-menu" class='my-4'>
                        <div class="row">
                            <div class="col-md-12">
                                <table class='table table-hover datatables'>
                                    <thead>
                                        <tr>
                                            <th> {{ __('Nomor Urut') }} </th>
                                            <th> {{ __('Nama Menu') }} </th>
                                            <th> {{ __('Tujuan URL') }} </th>
                                            <th> {{ __('Tanggal Pembuatan') }} </th>
                                            <th> {{ __('Pembuat') }} </th>
                                            <th> {{ __('Aksi') }} </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- Contoh Data Menu --}}
                                        <tr>
                                            <td colspan='5'>Postingan</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Contoh Data Sub-Menu --}}
                                        <tr>
                                            <td> {{ __(1) }} </td>
                                            <td> {{ __('Buat Postingan') }} </td>
                                            <td> {{ __('postingan/create') }} </td>
                                            <td> {{ __('2023-06-26') }} </td>
                                            <td> {{ __('Rama Wirahma') }} </td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
