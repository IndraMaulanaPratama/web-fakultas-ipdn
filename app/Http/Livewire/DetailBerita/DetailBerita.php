<?php

namespace App\Http\Livewire\DetailBerita;

use Livewire\Component;

class DetailBerita extends Component
{
    public $idBerita;

    public function mount($id)
    {
        $this->idBerita = $id;
    }

    public function render()
    {
        $params = [
            'title' => $this->idBerita. ' - IPDN Kampus Papua',
        ];

        return view('livewire.detail-berita.detail-berita')
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
