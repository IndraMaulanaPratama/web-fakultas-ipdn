<?php

namespace App\Http\Livewire\Component\Admin\CategoryManager;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormUpdateCategory extends Component
{
    public $idCategory;
    public $inputCategory;

    protected $listeners = [
      'showFormUpdate',
    ];

    public function showFormUpdate($data)
    {
        $this->idCategory = $data['CATEGORY_ID'];
        $this->inputCategory = $data['CATEGORY_NAME'];
    }

    public function EditCategory()
    {
        $this->validate([
          'inputCategory' => ['required', 'max:150', 'unique:CATEGORY,CATEGORY_NAME'],
        ]);

        $category = category::find($this->idCategory);
        $category->CATEGORY_NAME = $this->inputCategory;
        $category->CATEGORY_UPDATED_BY = Auth::user()->id;

        try {
            $category->save();

            $status = 'success';
            $message = 'Data Kategori berhasil diperbaharui';
        } catch (\Throwable $th) {
            $status = 'error';
            $message = 'Data Kategori gagal diperbaharui';
        }

        $this->emit('responseUpdate', ['status' => $status, 'message' => $message]);
    }

    public function cancelUpdate()
    {
        $this->emit('cancelUpdate');
    }

    public function render()
    {
        return view('livewire.component.admin.category-manager.form-update-category');
    }
}
