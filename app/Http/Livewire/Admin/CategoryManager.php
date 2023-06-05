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
    public $formOption = false;

    protected $listeners = [
      'responseAddNew',
      'cancelUpdate',
      'responseUpdate',
    ];

    public function mount()
    {
        $this->login = Auth::user();
    }

    public function responseAddNew($data)
    {
        session()->flash($data['status'], $data['message']);
    }

    public function FormUpdate($id)
    {
        $this->formOption = true;
        $data =  category::find($id);
        $this->emit('showFormUpdate', $data);
    }

    public function responseUpdate($data)
    {
      $this->formOption = false;
      session()->flash($data['status'], $data['message']);
    }

    public function cancelUpdate()
    {
        $this->formOption = false;
    }

    public function SoftDelete($id)
    {
        $category = category::find($id);

        /** PROCESS SOFT DELETE CATEGORY
         * 1. Inisialisasi tanggal dan user proses penghapusan data
         * 2. Eksekusi perubahan data
         * 3. Kirimkan response berhasil
         * 4. Kirimkan response gagal
         */

        try {
            // Step 1
            $category->CATEGORY_DELETED_AT = Carbon::now('Asia/Jakarta');
            $category->CATEGORY_DELETED_BY = $this->login->id;


            if ($category->save()) : // Step 2
                // Step 3
                session()->flash('success', 'Kategori yang anda pilih berhasil dihapuskan');
            endif;

        } catch (\Throwable $th) { // Step 4
            session()->flash('error', 'Kategori yang anda pilih gagal dihapuskan');
        }
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
          'title' => 'Daftar Kategori - IPDN Kampus Daerah',
          'page_name' => 'Daftar Kategori',
        ];

        return view('livewire.admin.category-manager', ['data' => $category])
        ->extends('layouts.admin', $params)
        ->section('content');

    }
}
