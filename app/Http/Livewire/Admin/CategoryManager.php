<?php

namespace App\Http\Livewire\Admin;

use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryManager extends Component
{
    use WithPagination;

    public $category;
    public $login;
    public $formOption;

    public $inputCategory;
    public $inputSort = null;
    public $inputSearch;


    public $sortField = 'CATEGORY_CREATED_AT';
    public $sortOption = 'DESC';
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
      'responseAddNew',
      'cancelUpdate',
      'responseUpdate',
    ];

    public function mount()
    {
        $this->login = Auth::user();
        $this->formOption = 'add';
    }

    public function updated()
    {
        if ('asc_name' == $this->inputSort) :
            $this->sortField = 'CATEGORY_NAME';
            $this->sortOption = 'ASC';

        elseif('desc_name' == $this->inputSort):
            $this->sortField = 'CATEGORY_NAME';
            $this->sortOption = 'DESC';

        elseif('asc_date' == $this->inputSort):
            $this->sortField = 'CATEGORY_CREATED_AT';
            $this->sortOption = 'ASC';

        elseif('desc_date' == $this->inputSort || null == $this->inputSort):
            $this->sortField = 'CATEGORY_CREATED_AT';
            $this->sortOption = 'DESC';
        endif;

    }

    public function responseAddNew($data)
    {
        $this->formOption = 'add';
        session()->flash($data['status'], $data['message']);
    }

    public function FormUpdate($id)
    {
        $this->formOption = 'update';
        $data =  category::find($id);
        $this->emit('showFormUpdate', $data);
    }

    public function responseUpdate($data)
    {
        $this->formOption = 'add';
        session()->flash($data['status'], $data['message']);
    }

    public function cancelUpdate()
    {
        $this->formOption = 'add';
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
                $this->formOption = 'add';
                session()->flash('success', 'Kategori yang anda pilih berhasil dihapuskan');
            endif;

        } catch (\Throwable $th) { // Step 4
            $this->formOption = 'add';
            session()->flash('error', 'Kategori yang anda pilih gagal dihapuskan');
        }
    }

    public function render()
    {
        $params = [
          'title' => 'Daftar Kategori - IPDN Kampus Daerah',
          'page_name' => 'Daftar Kategori',
        ];

        return view(
            'livewire.admin.category-manager',
            [
              'paginate' => category::with('user')
              ->NullDeleted()
              ->where('CATEGORY_NAME', 'LIKE', '%'. $this->inputSearch .'%')
              ->orderBy($this->sortField, $this->sortOption)
              ->paginate(
                  15,
                  [
                'CATEGORY_ID AS ID',
                'CATEGORY_NAME AS NAME',
                'CATEGORY_CREATED_AT AS CREATED_DATE',
                'CATEGORY_CREATED_BY'
                ]
              )
            ]
        )
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
