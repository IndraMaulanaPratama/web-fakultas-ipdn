<?php

namespace App\Http\Livewire\Homepage;

use App\Models\setting;
use App\Models\testimoni as ModelsTestimoni;
use Livewire\Component;

class Testimoni extends Component
{
    public $testimoni;
    public $setting;

    public function mount()
    {
        $this->testimoni = ModelsTestimoni::all();
        $this->setting = setting::find('1');
    }

    public function render()
    {
        $data = [
          'data' => $this->testimoni,
          'setting' => $this->setting,
        ];

        return view('livewire.homepage.testimoni', $data);
    }
}
