<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="row">
        <div class="col-md-12">
            <form wire:submit.prevent='SettingContact'>
                <div class="card shadow">
                    {{-- Card Header --}}
                    <div class="card-header">
                        <strong class="card-title">{{ __('Form Pengaturan Kontak') }}</strong>
                        <a class="float-right small text-muted" href="#!"> &nbsp; </a>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            {{-- Left Side --}}
                            <div class="col-md-6">
                                {{-- Input Instagram --}}
                                <div class="form-group">
                                    <label for="InputInstagram"> {{ __('Tautan Akun Instagram') }} </label>
                                    <input type="text" class="form-control" wire:model='inputInstagram'>
                                </div>

                                {{-- Input Email --}}
                                <div class="form-group">
                                    <label for="InputEmail"> {{ __('Alamat Surat Elektronik (Email)') }} </label>
                                    <input type="email" class="form-control" wire:model='inputEmail'>
                                </div>

                                {{-- Input Telephone --}}
                                <div class="form-group">
                                    <label for="inputTelephone"> {{ __('Nomor Telepon') }} </label>
                                    <input type="number" class="form-control" wire:model='inputTelephone'>
                                </div>

                                {{-- Input Fax --}}
                                <div class="form-group">
                                    <label for="inputFax"> {{ __('Nomor Fax') }} </label>
                                    <input type="number" class="form-control" wire:model='inputFax'>
                                </div>

                            </div>

                            {{-- Right Side --}}
                            <div class="col-md-6">
                                {{-- Input Address --}}
                                <div class="form-group">
                                    <label for="inputAddress">Alamat Lengkap</label>
                                    <textarea class='form-control' rows="3" wire:model='inputAddress'></textarea>
                                </div>

                                {{-- Input Maps --}}
                                <div class="form-group">
                                    <label for="inputAddress">Tautan Maps</label>
                                    <textarea class='form-control' rows="3" wire:model='inputMaps'></textarea>
                                </div>

                                {{-- Buttton Submit --}}
                                &nbsp;
                                <button type="submit" class="btn btn-lg btn-secondary form-control">Simpan Perubahan</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
