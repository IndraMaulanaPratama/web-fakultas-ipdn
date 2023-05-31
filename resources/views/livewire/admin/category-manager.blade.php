<div>
    {{-- In work, do what you enjoy. --}}

    {{-- Alert for success feedback from backend --}}
    @if (session()->has('success'))
        <div class="alert alert-primary shadow-lg alert-dismissible fade show" role="alert"">
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
        <div class="alert alert-danger shadow-lg alert-dismissible fade show" role="alert"">
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

        {{-- Data Table Category --}}
        <div class="col-md-8 mb-4">
            <div class="accordion w-100" id="accordion1">
                <div class="card shadow">
                    <div class="card-header" id="heading1">
                        <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                            aria-expanded="false" aria-controls="collapse1">
                            <strong>Buat Kategori Baru</strong>
                        </a>
                    </div>


                    <table class="table table-hover datatables" id="dataTable-category">
                        <thead>
                            <tr>
                                <th>Nama Kategori</th>
                                <th>Dibuat Oleh</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Action</th>
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
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" wire:click=''>Edit</button>
                                            <button class="dropdown-item"
                                                wire:click='SoftDelete({{ $data->ID }})'>Remove</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Form Add New Category --}}
        <div class="col-md-4 mb-4">
            <div class="accordion w-100" id="accordion1">
                <div class="card shadow">
                    <div class="card-header" id="heading1">
                        <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                            aria-expanded="false" aria-controls="collapse1">
                            <strong>Buat Kategori Baru</strong>
                        </a>
                    </div>
                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
                        <div class="card-body">
                            <form wire:submit.prevent="AddNew">
                                <div class="form-group">
                                    <label for="inputCategory">Nama Kategori</label>
                                    <input type="text" wire:model.defer="inputCategory" id="inputCategory"
                                        class="form-control" value="{{ $inputCategory }}" required>
                                    @error('inputCategory')
                                        <span class="error">{{ $message }}</span>
                                    @enderror

                                </div>

                                {{-- Submit Form --}}
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Plugin DataTable --}}
    @push('script')
        <link rel="stylesheet" href="{{ url('build/css/dataTables.bootstrap4.css') }}">
        <script src={{ url('build/js/jquery.dataTables.min.js') }}></script>
        <script src={{ url('build/js/dataTables.bootstrap4.min.js') }}></script>
        <script>
            $('#dataTable-category').DataTable({
                autoWidth: true,
                "lengthMenu": [
                    [10, 30, 50, -1],
                    [10, 30, 50, "All"]
                ]
            });
        </script>
    @endpush
