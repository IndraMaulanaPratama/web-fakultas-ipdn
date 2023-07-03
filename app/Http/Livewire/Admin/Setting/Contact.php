<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $contact;

    public function mount()
    {
        $this->contact = ModelsContact::find(1);
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
