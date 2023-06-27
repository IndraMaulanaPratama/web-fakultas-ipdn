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

    protected $listeners = ['refreshComponent' => '$refresh'];

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

    public function ProcessUpdate()
    {
        $dataTestimoni = ModelsTestimoni::find($this->inputId);

        try {
            $dataTestimoni->TESTIMONI_USERNAME = $this->inputName;
            $dataTestimoni->TESTIMONI_BATCH = $this->inputBatch;
            $dataTestimoni->TESTIMONI_CONTENT = $this->inputTestimoni;
            $dataTestimoni->save();

            $this->ClearForm();
            $this->emit('refreshComponent');
            session()->flash('success', 'Data Testimoni Berhasil Perbarui');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
        }
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
