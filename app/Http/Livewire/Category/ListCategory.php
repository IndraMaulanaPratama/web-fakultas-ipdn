<?php

namespace App\Http\Livewire\Category;

use App\Models\category;
use Livewire\Component;

class ListCategory extends Component
{
    public $category;
    protected $count = 3;

    public function ShowMore()
    {
        $this->count += 3;
    }

    public function render()
    {
        $this->category = category::with('article')->take($this->count)->nullDeleted()->get();

        $params = [
            'title' => 'Daftar Kategori - IPDN Kampus Daerah'
        ];

        $data = ['data' => $this->category];

        return view('livewire.category.list-category', $data)
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
