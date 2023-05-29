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
        <div class="col-md-4 mb-4">
            <div class="accordion w-100" id="accordion1">
                <div class="card shadow">
                    <div class="card-header" id="heading1">
                        <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1"
                            aria-expanded="false" aria-controls="collapse1">
                            <strong>Buat Kategori</strong>
                        </a>
                    </div>
                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
                        <div class="card-body">
                            <form wire:submit.prevent="AddNewCategory">
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
