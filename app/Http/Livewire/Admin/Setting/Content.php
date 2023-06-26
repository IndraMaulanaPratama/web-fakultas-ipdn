<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;

class Content extends Component
{
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
