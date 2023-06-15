<?php

namespace App\Http\Livewire\DetailBerita;

use App\Models\article;
use Livewire\Component;

class DetailBerita extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article = article::with('user')->nullDeleted()
        ->find($id);

    }

    public function render()
    {
        $params = [
            'title' => $this->article->ARTICLE_TITLE. ' - IPDN Kampus Papua',
        ];

        return view(
            'livewire.detail-berita.detail-berita',
            [
              'data' => $this->article,
            ]
        )
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
