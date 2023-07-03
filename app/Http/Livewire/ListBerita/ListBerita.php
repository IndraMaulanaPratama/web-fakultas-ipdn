<?php

namespace App\Http\Livewire\ListBerita;

use App\Models\article;
use Livewire\Component;

class ListBerita extends Component
{
    public $berita;
    public $countArticle = 8;

    protected $count =  5;

    public function mount()
    {
        $this->berita = article::take($this->countArticle)->nullDeleted()->get();
    }

    public function ShowMore()
    {
        $this->countArticle += $this->count;
    }

    public function render()
    {
        $params = [
            'title' => 'List Berita - IPDN Kampus Papua'
        ];

        $data = [
          'data' => $this->berita,
        ];

        return view('livewire.list-berita.list-berita', $data)
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
