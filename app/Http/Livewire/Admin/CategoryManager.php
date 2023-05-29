<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CategoryManager extends Component
{
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
