<?php

namespace App\Http\Livewire\Homepage;

use Livewire\Component;

class Homopage extends Component
{
    public function render()
    {
        $params = [
            'title' => 'Homepage - IPDN Kampus Daerah'
        ];

        return view('livewire.homepage.homopage')
        ->extends('layouts.public', $params)
        ->section('content');
    }
}
