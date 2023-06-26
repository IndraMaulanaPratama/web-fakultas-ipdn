<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\setting;
use Livewire\Component;

class Content extends Component
{
    public $setting;
    public $inputRegional;
    public $inputDirectorName;
    public $inputForeword;
    public $inputPhotoDirector;
    public $inputMars;
    public $inputHymne;

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

    public function SettingGeneral()
    {
        try {
            $this->setting->SETTING_REGIONAL = $this->inputRegional;
            $this->setting->SETTING_DIRECTOR_NAME = $this->inputDirectorName;
            $this->setting->SETTING_DIRECTOR_MESSAGE = $this->inputForeword;
            $this->setting->SETTING_URL_MARS = $this->inputMars;
            $this->setting->SETTING_URL_HYMNE = $this->inputHymne;
            $this->setting->save();

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
