<?php

namespace App\Http\Livewire\Admin;

use App\Models\role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AccountManager extends Component
{
    public $login;
    public $usernameLogin;
    public $emailLogin;
    public $roleLogin;

    public $inputPassword;
    public $inputNewPassword;
    public $inputConfirmPassword;

    public function mount()
    {
        $this->login = Auth::user();

        $this->usernameLogin = $this->login->name;
        $this->emailLogin = $this->login->email;
        $this->roleLogin = role::find($this->login->role);
    }

    public function ChangePassword()
    {
        // Validasi Data Mandatory
        $this->validate([
          'inputPassword' => ['required', 'min:8'],
          'inputNewPassword' => ['required', 'min:8'],
          'inputConfirmPassword' => ['required', 'min:8', 'same:inputNewPassword'],
        ]);

        /**
         * PROSES UPDATE KATA SANDI
         * 1. Validasi Password terkini dengan yang ada di database
         * 2. Merubah Password yang tersimpan di middleware authentications
         * 3. Mengirim pesan sukses ke frontend menggunakan session
         * 4. Mengirim pesan gagal ke frontend menggunakan session
         * */

        // Step 1
        if (Hash::check($this->inputPassword, Auth::user()->password)) :

            // Step 2
            $this->login->password = Hash::make($this->inputNewPassword);
            $this->login->save();

            // Step 3
            session()->flash('success', 'Kata sandi berhasil diperbaharui.');

        else:
            // Step 4
            session()->flash('error', 'Kata sandi saat ini tidak sesuai, silahkan periksa kembali data yang anda masukan.');

        endif;

    }

    public function render()
    {
        $userLogin = role::with('user')->where('ROLE_ID', $this->login->role)->first();

        $params = [
            'title' => 'Pengaturan Akun - IPDN Kampus Papua',
            'page_name' => 'Pengaturan Akun',
        ];

        $data = [
            'login' => [
              'username' => $userLogin->user[0]->name,
              'email' => $userLogin->user[0]->email,
              'role' => $this->roleLogin->ROLE_NAME,
            ],
        ];
        return view('livewire.admin.account-manager', $data)
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
