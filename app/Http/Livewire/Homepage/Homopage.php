<?php

namespace App\Http\Livewire\Homepage;

use App\Models\article;
use Livewire\Component;

class Homopage extends Component
{
    public $berita;

    public function mount()
    {
        $this->berita = article::with('user')->take(3)->get();
    }

      public function render()
      {
          $params = [
              'title' => 'Homepage - IPDN Kampus Daerah'
          ];

          return view('livewire.homepage.homopage', $this->berita)
          ->extends('layouts.public', $params)
          ->section('content');
      }
}
