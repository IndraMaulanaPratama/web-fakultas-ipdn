<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\testimoni as ModelsTestimoni;
use Livewire\Component;
use Livewire\WithFileUploads;

class Testimoni extends Component
{
    use WithFileUploads;

    public $testimoni;
    public $inputId;
    public $inputName;
    public $inputBatch;
    public $inputTestimoni;
    public $inputPhoto;

    protected $listeners = ['refreshComponent' => '$refresh'];

    // Rules of Form Validation
    protected $rules = [
      'inputId' => ['required'],
      'inputName' => ['required', 'max:100'],
      'inputBatch' => ['required', 'max:4'],
      'inputTestimoni' => ['required', 'max:255'],
      'inputPhoto' => ['image', 'max:255'],
    ];

    public function mount()
    {
        $this->testimoni = ModelsTestimoni::all();
    }

    // Reatime Form Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // Updating Form Value Based On Choosen Data
    public function FormEdit($id)
    {
        $testimoni = ModelsTestimoni::find($id);
        $this->inputId = $testimoni->TESTIMONI_ID;
        $this->inputName = $testimoni->TESTIMONI_USERNAME;
        $this->inputBatch = $testimoni->TESTIMONI_BATCH;
        $this->inputTestimoni = $testimoni->TESTIMONI_CONTENT;
    }

    // Set Null Value for All of Input Form
    public function ClearForm()
    {
        $this->inputId = null;
        $this->inputName = null;
        $this->inputBatch = null;
        $this->inputTestimoni = null;
        $this->inputPhoto = null;
        $this->emit('refreshComponent');
    }

    public function ProcessUpdate()
    {
        $this->validate();

        $dataTestimoni = ModelsTestimoni::find($this->inputId);

        // Initiate Field and Value
        if (null == $this->inputPhoto):
            $value = [
              $dataTestimoni->TESTIMONI_USERNAME = $this->inputName,
              $dataTestimoni->TESTIMONI_BATCH = $this->inputBatch,
              $dataTestimoni->TESTIMONI_CONTENT = $this->inputTestimoni,
            ];

            // When admin changes photo
        else:
            // Get Photos Name
            $filename = $this->inputPhoto->getClientOriginalName();

            $value = [
              $dataTestimoni->TESTIMONI_USERNAME = $this->inputName,
              $dataTestimoni->TESTIMONI_BATCH = $this->inputBatch,
              $dataTestimoni->TESTIMONI_CONTENT = $this->inputTestimoni,
              $dataTestimoni->TESTIMONI_IMAGE = $filename,
            ];

            // Process Upload File to Fiilesystem dir_image
            $this->inputPhoto->storeAs(
                'testimoni',
                $filename,
                'dir_image'
            );
        endif;

        // Logic Process Updating Data
        try {
            $dataTestimoni->save($value);

            $this->ClearForm();
            $this->emit('refreshComponent');
            session()->flash('success', 'Data Testimoni Berhasil di Perbarui');
        } catch (\Throwable $th) {
            session()->flash('error', 'Data Testimoni Gagal di Perbarui');
            // session()->flash('error', $th->getMessage());
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
