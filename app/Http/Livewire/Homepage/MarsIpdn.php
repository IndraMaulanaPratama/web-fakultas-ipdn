<?php

namespace App\Http\Livewire\Homepage;

use App\Models\setting;
use Livewire\Component;

class MarsIpdn extends Component
{
    public $setting;

    public function mount()
    {
        $this->setting = setting::find(1);
    }

    public function render()
    {
        $data = ['setting' => $this->setting];
        return view('livewire.homepage.mars-ipdn', $data);
    }
}
