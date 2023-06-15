<?php

namespace App\Http\Livewire\DetailBerita;

use App\Models\article;
use App\Models\category;
use Livewire\Component;

class DetailBerita extends Component
{
    public $article;
    public $category;

    public function mount($id)
    {
        $this->article = article::with('user')->nullDeleted()
        ->find($id);

        $this->category = category::nullDeleted()->take(7)->get();
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
              'category' => $this->category,
            ]
        )
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
