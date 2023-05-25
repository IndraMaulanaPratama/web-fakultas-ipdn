<?php

namespace App\Http\Livewire\Component\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TopNavigation extends Component
{
    public function render()
    {
        $params = [
          'username' => Auth::user()->name,
        ];
        return view('livewire.component.admin.top-navigation', $params);
    }
}
