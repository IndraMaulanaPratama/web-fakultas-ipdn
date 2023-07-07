<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Content extends Component
{
    use WithFileUploads;

    public $setting;
    public $inputRegional;
    public $inputDirectorName;
    public $inputForeword;
    public $inputPhotoDirector;
    public $inputMars;
    public $inputHymne;

    protected $rules = [
      'inputRegional' => ['required', 'max:200'],
      'inputDirectorName' => ['required', 'max:150'],
      'inputForeword' => ['required', 'max:255'],
      'inputPhotoDirector' => ['image', 'max:50'],
      'inputMars' => ['required'],
      'inputHymne' => ['required'],
    ];

    public function mount()
    {
        $this->setting = setting::find('1');

        // Configure Form General Setting
        $this->inputRegional = $this->setting->SETTING_REGIONAL;
        $this->inputDirectorName = $this->setting->SETTING_DIRECTOR_NAME;
        $this->inputForeword = $this->setting->SETTING_DIRECTOR_MESSAGE;
        $this->inputMars = $this->setting->SETTING_URL_MARS;
        $this->inputHymne = $this->setting->SETTING_URL_HYMNE;
    }

    // Realtime Form Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function SettingGeneral()
    {
        // Get photo name
        $filename = $this->inputPhotoDirector->getClientOriginalName();

        // Initiate Field and value
        $value = [
          $this->setting->SETTING_REGIONAL = $this->inputRegional,
          $this->setting->SETTING_DIRECTOR_NAME = $this->inputDirectorName,
          $this->setting->SETTING_DIRECTOR_MESSAGE = $this->inputForeword,
          $this->setting->SETTING_DIRECTOR_IMAGE = $filename,
          $this->setting->SETTING_URL_MARS = $this->inputMars,
          $this->setting->SETTING_URL_HYMNE = $this->inputHymne,
        ];

        try {
            // Upload Photo
            $this->inputPhotoDirector->storeAS(
                'director',
                $filename,
                'dir_image'
            );

            $this->setting->save($value);

            session()->flash('success', 'General Setting Berhasil Diperbaharui');
        } catch (\Throwable $th) {
            // session()->flash('error', 'General Setting Gagal Diperbaharui');
            session()->flash('error', $th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.setting.content')
        ->extends(
            'layouts.admin',
            [
          'title' => 'Pengaturan General - IPDN Kampus Daerah',
          'page_name' => 'Pengaturan General'
        ]
        )
      ->section('content');

    }
}
