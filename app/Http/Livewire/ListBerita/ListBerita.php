<?php

namespace App\Http\Livewire\ListBerita;

use App\Models\article;
use Livewire\Component;

class ListBerita extends Component
{
    public $berita;

    public $countArticle = 8;
    protected $count = 6;

    public function mount()
    {
    }

    public function ShowMore()
    {
        $this->countArticle += $this->count;
    }

    public function render()
    {
        $this->berita = article::with('user')->take($this->countArticle)->nullDeleted()->orderByDesc('ARTICLE_ID')->get();

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
