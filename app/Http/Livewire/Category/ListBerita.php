<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class ListBerita extends Component
{
    public function render()
    {
        $params = [
            'title' => 'Berita Berdasarkan Kategori - IPDN Kampus Papua'
        ];

        return view('livewire.category.list-berita')
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
