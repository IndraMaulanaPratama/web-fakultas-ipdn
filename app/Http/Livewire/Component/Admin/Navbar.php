<?php

namespace App\Http\Livewire\Component\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.component.admin.navbar', ['user_data' => Auth::user()]);
    }
}
