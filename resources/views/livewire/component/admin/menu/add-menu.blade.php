<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form wire:submit.prevent='TambahData'>

                {{-- Menu Name --}}
                <div class="form-group">
                    <label for="inputName"> {{ __('Nama') }}:</label>
                    <input type="text" wire:model='inputName' class='form-control'>
                </div>

                {{-- Orders --}}
                <div class="form-group">
                    <label for="inputOrder"> {{ __('Nomor Urut') }}:</label>
                    <input type="number" wire:model='inputOrder' class='form-control col-md-4'>
                </div>

                {{-- URL --}}
                <div class="form-group">
                    <label for="inputUrl"> {{ __('Tujuan URL') }}:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">
                                {{ env('APP_URL') }} </span>
                        </div>
                        <input type="text" wire:model='inputUrl' class="form-control" id="basic-url"
                            aria-describedby="basic-addon3">
                    </div>
                </div>

                {{-- Icon --}}
                <div class="form-group">
                    <label for="inputIcon"> {{ __('Icon Menu') }}:</label>
                    <input type="file" wire:model='inputIcon' class='form-control' required>

                    @error('inputIcon')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Divider --}}
                <div class="my-4">
                    <hr>
                </div>

                {{-- Button --}}
                <div>
                    {{-- Close Button --}}
                    <button type="button" class="btn mb-2 btn-outline" data-dismiss="modal"
                        wire:click="CloseForm('add-menu')">
                        {{ __('Batalkan') }}
                    </button>
                    {{-- Save Button --}}
                    <button type="button" class="btn mb-2 btn-secondary">
                        {{ __('Simpan Data') }}
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
