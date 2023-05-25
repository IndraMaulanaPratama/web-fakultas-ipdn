<?php

namespace App\Http\Livewire\ListBerita;

use Livewire\Component;

class ListBerita extends Component
{
    public function render()
    {
        $params = [
            'title' => 'List Berita - IPDN Kampus Papua'
        ];

        return view('livewire.list-berita.list-berita')
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
