<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $contact;
    public $inputInstagram;
    public $inputEmail;
    public $inputPhone;
    public $inputFax;
    public $inputAddress;
    public $inputMaps;

    public function mount()
    {
        $this->contact = ModelsContact::find(1);
        $this->inputInstagram = $this->contact->CONTACT_INSTAGRAM;
        $this->inputEmail = $this->contact->CONTACT_EMAIL;
        $this->inputPhone = $this->contact->CONTACT_TELEPHONE;
        $this->inputFax = $this->contact->CONTACT_FAX;
        $this->inputAddress = $this->contact->CONTACT_ADDRESS;
        $this->inputMaps = $this->contact->CONTACT_MAPS;
    }

    public function SettingContact()
    {
        try {

            $this->contact->CONTACT_INSTAGRAM = $this->inputInstagram;
            $this->contact->CONTACT_EMAIL = $this->inputEmail;
            $this->contact->CONTACT_TELEPHONE = $this->inputPhone;
            $this->contact->CONTACT_FAX = $this->inputFax;
            $this->contact->CONTACT_ADDRESS = $this->inputAddress;
            $this->contact->CONTACT_MAPS = $this->inputMaps;
            $this->contact->save();

            session()->flash('success', 'Pengaturan Kontak Berhasil Diperbarui');
        } catch (\Throwable $th) {
            session()->flash('error', 'Pengaturan Kontak Gagal Diperbarui');
        }
    }

    public function render()
    {
        $params = [
          'title' => 'Pengaturan Kontak - IPDN Kampus Daerah',
          'page_name' => 'Halaman Pengaturan Kontak'
        ];

        $data = [
          'data' => $this->contact,
        ];
        return view('livewire.admin.setting.contact', $data)
        ->extends('layouts.admin', $params)
        ->section('content');
    }
}
