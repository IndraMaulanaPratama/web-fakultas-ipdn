<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryManager extends Component
{
    public $login;
    public $inputCategory;

    public function mount()
    {
        $this->login = Auth::user();
    }

    public function AddNewCategory()
    {

        // Validasi Data Mandatory
        $this->validate([
          'inputCategory' => ['required', 'unique:CATEGORY,CATEGORY_NAME'],
        ]);

        /** Proses Tambah Data Kategori */
        /**
         * 1. Inisialisasi Proses input data
         * 2. Handle kondisi ketika proses input berhasil dijalankan
         * 3. Handle kondisi ketika gagal dijalankan
         * 4. Handle kondisi kegagalan system
         */

        try {
            // Step 1
            $processInput = category::addCategory($this->inputCategory);

            if ($processInput) : // Step 2
                $this->inputCategory = null;
                session()->flash('success', 'Kategori baru berhasil ditambahkan');
            else : // Step3
                $this->inputCategory = null;
                session()->flash('error', 'Kategori baru gagal ditambahkan');
            endif;

        } catch (\Throwable $th) { // Step 4
            session()->flash('error', 'Terdapat kesalah internal didalam system, silahkan hubungi administrator untuk menyelesaikan masalah. Terimakasih');
        }

    }

    public function render()
    {
        $params = [
          'title' => 'Daftar KAtegori - IPDN Kampus Daerah',
          'page_name' => 'Daftar Kategori',
    ];

        return view('livewire.admin.category-manager')
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
