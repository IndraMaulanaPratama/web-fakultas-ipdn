<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $params = [
            'title' => 'Dashboard - IPDN Kampus Daerah',
            'page_name' => 'Dashboard',
        ];

        return view('livewire.admin.default.index')
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
