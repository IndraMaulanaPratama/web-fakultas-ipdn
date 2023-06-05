<?php

namespace App\Http\Livewire\Component\Admin\CategoryManager;

use App\Models\category;
use Livewire\Component;

class FormAddCategory extends Component
{
    public $inputCategory;

    public function AddNew()
    {

        // Validasi Data Mandatory
        $this->validate([
          'inputCategory' => ['required', 'unique:CATEGORY,CATEGORY_NAME']
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
            category::addCategory($this->inputCategory);

            // Step 2
            $status = 'success';
            $message = 'Kategori baru berhasil ditambahkan';

        } catch (\Throwable $th) { // Step 4
            $status = 'error';
            $message = 'Kategori baru gagal ditambahkan';
        }

        $this->inputCategory = null;
        $this->emit('responseAddNew', ['status' => $status, 'message' => $message]);
    }

    public function render()
    {
        return view('livewire.component.admin.category-manager.form-add-category');
    }
}
