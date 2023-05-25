<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    {{-- Change Profile Area --}}
    <form wire:submit.prevent="AccountManager">
        <div class="card my-3 py-4">
            <div class="card-body mb-n3">
                <h3>Data Akun Pengguna</h3>
                </br>

                {{-- Form First and Lastname --}}
                <div class="form-row">
                    {{-- Input Firstname --}}
                    <div class="form-group col-md-6">
                        <label for="inputFirstname">Nama Depan</label>
                        <input type="text" id="inputFirstname" class="form-control" value="{{ $login['username'] }}"
                            required>
                    </div>

                    {{-- Input Lastname --}}
                    <div class="form-group col-md-6">
                        <label for="inputLastname">Nama Belakang</label>
                        <input type="text" id="inputLastname" class="form-control">
                    </div>
                </div>

                {{-- Form Email and Confirm Password --}}
                <div class="form-row">
                    {{-- Input Email --}}
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Surat Elektronik</label>
                        <input type="email" class="form-control" id="inputEmail" @disabled(true)
                            value="{{ $login['email'] }}">
                    </div>

                    {{-- Input Confirm Password --}}
                    <div class="form-group col-md-6">
                        <label for="currentPassword">Kata sandi saat ini</label>
                        <input type="password" class="form-control" id="currentPassword" required>
                    </div>
                </div>

                {{-- Submit Form --}}
                <button type="submit" class="btn btn-primary mt-4">Simpan Perubahan</button>
            </div>
        </div>
    </form>

    {{-- Change Password Area --}}
    <form wire:submit.prevent="ChangePassword">
        <div class="card my-3 py-4">
            <div class="card-body mb-n3">
                <h3>Ubah Kata Sandi</h3>
                </br>

                @if (session()->has('success'))
                    <div class="alert alert-primary shadow-lg">
                        <i class="fe fe-check-circle"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger shadow-lg">
                        <div>
                            <i class="fe fe-x-circle"></i>
                            <span>{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                <div class="row mb-4">
                    {{-- Form Change Password --}}
                    <div class="col-md-6">

                        {{-- Input Current Password --}}
                        <div class="form-group">
                            <label for="inputPassword">Kata sandi saat ini</label>
                            <input type="password" class="form-control" id="inputPassword"
                                wire:model.defer="inputPassword" required>

                            @error('inputPassword')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>

                        {{-- Form New Password and Confirm New Password --}}
                        <div class="form-row">
                            {{-- Input New Password --}}
                            <div class="form-group col-md-6">
                                <label for="inputNewPassword">Kata sandi baru</label>
                                <input type="password" class="form-control" id="inputNewPassword"
                                    wire:model.defer="inputNewPassword" required>
                            </div>

                            {{-- Input Confirm New Passowrd --}}
                            <div class="form-group col-md-6">
                                <label for="inputConfirmPassword">Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="inputConfirmPassword"
                                    wire:model.defer="inputConfirmPassword" required>
                            </div>

                            @error('inputConfirmPassword')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    {{-- Instruction Area --}}
                    <div class="col-md-6">
                        <p class="mb-2">Ketentuan Kata Sandi</p>
                        <p class="small text-muted mb-2"> Saat mengubah kata sandi, kami sarankan untuk memenuhi
                            kriteria
                            dibawah ini guna memaksimalkan keamanan akun anda: </p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li> Minimal terdiri dari 8 karakter </li>
                            <li>Setidaknya memiliki satu karakter spesial (contoh: !,@,#,$, dll.)</li>
                            <li>Menyisipkan minimal satu buah karakter nomor</li>
                            <li>Hindari untuk menggunakan password yang digunakan sebelumnya</li>
                        </ul>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Ubah Kata Sandi</button>
            </div>
        </div>
    </form>

    {{-- END OF Change Password Area --}}
</div>
</div>
