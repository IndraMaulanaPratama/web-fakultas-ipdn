<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class ListCategory extends Component
{
    public function render()
    {
        $params = [
            'title' => 'Daftar Kategori - IPDN Kampus Papua'
        ];

        return view('livewire.category.list-category')
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
