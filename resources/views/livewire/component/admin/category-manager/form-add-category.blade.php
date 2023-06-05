<div class="col-md-4 mb-4">
    <div class="accordion w-100" id="accordion1">
        <div class="card shadow">
            <div class="card-header" id="heading1">
                <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                    aria-controls="collapse1">
                    <strong> {{ __('Formulir Tambah Data Kategori') }} </strong>
                </a>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
                <div class="card-body">
                    <form wire:submit.prevent="AddNew">
                        <div class="form-group">
                            <label for="inputCategory"> {{ __('Nama Kategori') }} </label>
                            <input type="text" wire:model.defer="inputCategory" id="inputCategory"
                                class="form-control" value="{{ $inputCategory }}" required>
                            @error('inputCategory')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>

                        {{-- Submit Form --}}
                        <button type="submit" class="btn btn-secondary">{{ __('Simpan') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
