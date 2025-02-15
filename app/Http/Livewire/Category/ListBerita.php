<?php

namespace App\Http\Livewire\Category;

use App\Models\article;
use App\Models\category;
use Livewire\Component;

class ListBerita extends Component
{
    public $article;
    public $category;
    public $categoryId;
    public $perpage = 4;

    public function mount($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->category = category::find($categoryId);
    }

    public function loadmore()
    {
        $this->perpage += 4;
    }

    public function render()
    {
        $this->article = article::with('user', 'category')->category($this->categoryId)->nullDeleted()->orderBy('ARTICLE_ID', 'DESC')->take($this->perpage)->get();

        $params = [
            'title' => 'Postinagn Kategori '. $this->category->CATEGORY_NAME .' - IPDN Kampus Daerah'
        ];

        $data = [
          'data' => $this->article,
        ];

        return view('livewire.category.list-berita', $data)
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
