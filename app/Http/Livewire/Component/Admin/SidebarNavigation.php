<?php

namespace App\Http\Livewire\Component\Admin;

use App\Models\menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SidebarNavigation extends Component
{
    public $login;
    public $menu;
    public $submenu;

    public function mount()
    {
        $this->login = Auth::user();

        $role = $this->login->role;

        if ($role == 1) : // Kondisi ketika role adalah super admin
            $this->menu = menu::with('submenu')->activeMenu()->get();

        elseif ($role == 2) : // Kondisi ketila role adalah admin
            $this->menu = menu::with('submenu')
            ->whereIn('MENU_ID', [1,2,3])
            ->activeMenu()
            ->get();

        elseif ($role == 3) : // Kondisi ketika role adalah penulis
            $this->menu = menu::with('submenu')
            ->whereIn('MENU_ID', [1])
            ->activeMenu()
            ->get();
        endif;

        Log::info("test");
    }

    public function render()
    {
        return view('livewire.component.admin.sidebar-navigation', $this->menu);
    }
}
