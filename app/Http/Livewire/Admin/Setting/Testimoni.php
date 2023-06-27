<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\testimoni as ModelsTestimoni;
use Livewire\Component;

class Testimoni extends Component
{
    public $testimoni;
    public $inputId;
    public $inputName;
    public $inputBatch;
    public $inputTestimoni;


    public function mount()
    {
        $this->testimoni = ModelsTestimoni::all();
    }

    public function FormEdit($id)
    {
        $testimoni = ModelsTestimoni::find($id);
        $this->inputId = $testimoni->TESTIMONI_ID;
        $this->inputName = $testimoni->TESTIMONI_USERNAME;
        $this->inputBatch = $testimoni->TESTIMONI_BATCH;
        $this->inputTestimoni = $testimoni->TESTIMONI_CONTENT;
    }

    public function ClearForm()
    {
        $this->inputId = null;
        $this->inputName = null;
        $this->inputBatch = null;
        $this->inputTestimoni = null;
    }

    public function render()
    {
        $params = [
          'title' => 'Setting Testimoni | IPDN Kampus Deaerah',
          'page_name' => 'Pengaturan Data Testimoni'
        ];

        $data = ['data' => $this->testimoni];

        return view('livewire.admin.setting.testimoni', $data)
          ->extends('layouts.admin', $params)
          ->section('content');
    }
}
