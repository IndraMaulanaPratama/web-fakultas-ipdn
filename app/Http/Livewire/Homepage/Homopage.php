<?php

namespace App\Http\Livewire\Homepage;

use App\Models\article;
use App\Models\setting;
use Livewire\Component;

class Homopage extends Component
{
    public $berita;
    public $setting;

    public function mount()
    {
        $this->setting = setting::find('1');
        $this->berita = article::with('user')->take(3)->get();
    }

    public function render()
    {
        $params = [
            'title' => 'Homepage - IPDN Kampus Daerah ' . $this->setting->SETTING_REGIONAL
        ];

        $data = [
          $this->berita,
          'setting' => $this->setting,
        ];

        return view('livewire.homepage.homopage', $data)
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
