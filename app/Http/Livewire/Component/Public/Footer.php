<?php

namespace App\Http\Livewire\Component\Public;

use App\Models\contact;
use Livewire\Component;

class Footer extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = contact::find(1);
    }

    public function render()
    {
        return view('livewire.component.public.footer', ['data' => $this->contact]);
    }
}
