<?php

namespace App\Http\Livewire\Homepage;

use App\Models\article;
use Livewire\Component;

class Berita extends Component
{
    public $berita;

    public function mount()
    {
        $this->berita = article::nullDeleted()->take(3)->orderBy('ARTICLE_ID', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.homepage.berita', ['data' => $this->berita]);
    }
}
