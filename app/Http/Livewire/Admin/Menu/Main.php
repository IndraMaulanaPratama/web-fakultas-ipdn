<?php

namespace App\Http\Livewire\Admin\Menu;

use Livewire\Component;
use Livewire\WithFileUploads;

class Main extends Component
{
    use WithFileUploads;

    public $formSetting = null;

    protected $rules = [
      'inputName' => ['required', 'max:20'],
      'inputOrder' => ['required', 'digits_between:1,99'],
      'inputUrl' => ['required', 'max:255'],
      'inputIcon' => ['image'],
    ];

    protected $listeners = [
      'close-form' => 'CloseForm',
    ];

    public function updated($variableName)
    {
        $this->validateOnly($variableName);
    }

    public function ShowAddMenu()
    {
        $this->formSetting = 'add-menu';
    }

    public function ShowAddSubMenu()
    {
        $this->formSetting = 'add-sub-menu';
    }

    public function CloseForm()
    {
        $this->formSetting = null;
    }


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
