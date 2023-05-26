<?php

namespace App\Http\Livewire\Admin;

use App\Models\role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class AccountManager extends Component
{
    public $login;
    public $usernameLogin;
    public $emailLogin;
    public $roleLogin;

    public $inputFirstname;
    public $inputLastname;
    public $inputEmail;
    public $currentPassword;

    public $inputPassword;
    public $inputNewPassword;
    public $inputConfirmPassword;

    public function mount()
    {
        $this->login = Auth::user();

        // Variable Change Password
        $this->usernameLogin = $this->login->name;
        $this->emailLogin = $this->login->email;
        $this->roleLogin = role::find($this->login->role);
    }

    public function AccountManager()
    {
        $this->validate([
          'usernameLogin' => ['required', 'string'],
          'inputLastname' => ['nullable', 'string'],
          'currentPassword' => ['required', 'current_password:web']
        ]);

        /**
         * Proses Update Data Akun
         * 1. Penggabungan nama depan dan nama belakang
         * 2. Ubah data nama login user sesuai dengan nama di step 1
         * 3. Mengirim pesan sukses ke frontend menggunakan session
         * 4. Mengirim pesan gagal ke frontend menggunakan session
         */

        try {
            //  Step 1
            $fullname = $this->usernameLogin. ' '. $this->inputLastname;

            // Step 2
            $this->login->name = $fullname;
            $this->login->save();

            // Step 3
            session()->flash('success', 'Data akun anda berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Step 4
            session()->flash('error', 'Data akun anda gagal diperbaharui.');
        }

    }

    public function ChangePassword()
    {
        // Validasi Data Mandatory
        $this->validate([
          'inputPassword' => ['required', 'min:8', 'current_password:web'],
          'inputNewPassword' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()->letters()],
          'inputConfirmPassword' => ['required', 'min:8', 'same:inputNewPassword'],
        ]);

        /**
         * PROSES UPDATE KATA SANDI
         * 1. Validasi Password terkini dengan yang ada di database
         * 2. Merubah Password yang tersimpan di middleware authentications
         * 3. Mengirim pesan sukses ke frontend menggunakan session
         * 4. Mengirim pesan warning ke frontend menggunakan session
         * 5. Mengirim pesan gagal ke frontend menggunakan session
         * */

        try {
            // Step 1
            if (Hash::check($this->inputPassword, Auth::user()->password)) :

                // Step 2
                $this->login->password = Hash::make($this->inputNewPassword);
                $this->login->save();

                // Step 3
                session()->flash('successPassword', 'Kata sandi berhasil diperbaharui.');

            else:
                // Step 4
                session()->flash('warningPassword', 'Kata sandi saat ini tidak sesuai, silahkan periksa kembali data yang anda masukan.');
            endif;

        } catch (\Throwable $th) {
            // Step 5
            session()->flash('errorPassword', 'Terdapat kesalah internal didalam system, silahkan hubungi administrator untuk menyelesaikan masalah. Terimakasih');
        }
    }

    public function render()
    {
        $params = [
            'title' => 'Pengaturan Akun - IPDN Kampus Papua',
            'page_name' => 'Pengaturan Akun',
        ];

        return view('livewire.admin.account-manager')
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
