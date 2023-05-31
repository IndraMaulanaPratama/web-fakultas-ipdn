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

    public function AddNew()
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

    public function SoftDelete($id)
    {
        $category = category::find($id);
        $category->CATEGORY_DELETED_AT = Carbon::now('Asia/Jakarta');
        $category->CATEGORY_DELETED_BY = $this->login->id;
        $category->save();
    }

    public function render()
    {
        $category = category::with('user')->NullDeleted()->get([
          'CATEGORY_ID AS ID',
          'CATEGORY_NAME AS NAME',
          'CATEGORY_CREATED_AT AS CREATED_DATE',
          'CATEGORY_CREATED_BY'
        ]);

        $params = [
          'title' => 'Daftar KAtegori - IPDN Kampus Daerah',
          'page_name' => 'Daftar Kategori',
        ];

        return view('livewire.admin.category-manager', ['data' => $category])
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
