<?php

namespace App\Http\Livewire\Component\Admin\Menu;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddMenu extends Component
{
    use WithFileUploads;

    public $inputName;
    public $inputOrder;
    public $inputUrl;
    public $inputIcon;

    public function CloseForm()
    {
        $this->inputName = null;
        $this->inputOrder = null;
        $this->inputUrl = null;
        $this->inputIcon = null;

        $this->emit('close-form');
    }


    public function render()
    {
        return view('livewire.component.admin.menu.add-menu');
    }
}
