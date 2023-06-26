<?php

namespace App\Http\Livewire\Component\Public;

use App\Models\setting;
use Livewire\Component;

class Navbar extends Component
{
    public $setting;

    public function mount()
    {
        $this->setting = setting::find('1');
    }

    public function render()
    {
        $data = [
          'setting' => $this->setting
        ];

        return view('livewire.component.public.navbar', $data);
    }
}
