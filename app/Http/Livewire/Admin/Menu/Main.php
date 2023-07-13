<?php

namespace App\Http\Livewire\Admin\Menu;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        $params = [
          'title' => 'Manajemen Menu | IPDN Kampus Deaerah',
          'page_name' => 'Manajemen Menu'
        ];

        return view('livewire.admin.menu.main')
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
