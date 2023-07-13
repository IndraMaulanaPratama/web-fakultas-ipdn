<?php

namespace App\Http\Livewire\Component\Admin\Menu;

use App\Models\menu;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddMenu extends Component
{
    public $login;
    public $inputName;
    public $inputOrder;
    public $inputUrl;
    public $inputIcon;

    protected $rules = [
      'inputName' => ['required', 'max:20'],
      'inputOrder' => ['required', 'digits_between:1,99'],
      'inputUrl' => ['required', 'max:255'],
      'inputIcon' => ['image'],
    ];

    public function mount()
    {
        $this->login = Auth::user();
    }

    public function updated($variableName)
    {
        $this->validateOnly($variableName);
    }

    public function CloseForm()
    {
        $this->inputName = null;
        $this->inputOrder = null;
        $this->inputUrl = null;
        $this->inputIcon = null;

        $this->emit('close-form');
    }

    // TODO:: Test Function Tambah Data Menu
    public function TambahData()
    {
        /** Proses Tambah Menu */
        /**
         * 1. Validasi Data Mandatory
         * 2. Inisialisasi Field dan Data Input
         * 3. Percobaan Insert Database
         * 4. Buat Response Sukses untuk frontend
         * 5. Refresh Halaman Utama
         * 6. Buat Response Gagal untuk Frontend
         */

        //  Step 1
        $this->validate($this->rules);

        // Step 2
        $value = [
          'MENU_ORDER' => $this->inputOrder,
          'MENU_NAME' => $this->inputName,
          'MENU_URL' => $this->inputUrl,
          'MENU_ICON' => $this->inputIcon,
          'MENU_CREATED_BY' => $this->login->id,
        ];

        try {
            // Step 3
            menu::create($value);

            // Step 4
            session()->flash('success', 'Menu Berhasil ditambahkan');

            // Step 5
            $this->emit('refresh-component');

        } catch (\Throwable $th) {
            // Step 6
            session()->flash('error', $th->getMessage());
            // session()->flash('error', 'Menu Gagal Ditambahkan');
        }
    }

    public function render()
    {
        return view('livewire.component.admin.menu.add-menu');
    }
}
