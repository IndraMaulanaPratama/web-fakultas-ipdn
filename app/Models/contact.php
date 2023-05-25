<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $table = 'CONTACT';

    protected $fillable = [
      'CONTACT_ADDRESS',
      'CONTACT_TELEPHONE',
      'CONTACT_FAX',
      'CONTACT_EMAIL',
      'CONTACT_FACEBOOK',
      'CONTACT_YOUTUBE',
      'CONTACT_INSTAGRAM',
      'CONTACT_MAPS',
    ];

    protected $attributes = [
      'CONTACT_ADDRESS' => 'Jl.Raya Bandung-Sumedang Km.20 Jatinangor, Sumedang 45363 Jawa Barat',

      'CONTACT_TELEPHONE' => '(022) 7798252',
      'CONTACT_FAX' => '(021) 7798256',
      'CONTACT_EMAIL' => 'humas@ipdn.ac.id',
      'CONTACT_YOUTUBE' => 'https://www.youtube.com/channel/UC5DlImc57TNYbeqwEIWl9Sg',
      'CONTACT_INSTAGRAM' => 'https://www.instagram.com/humasipdn.id/?hl=id',

      'CONTACT_MAPS' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31685.21207274228!2d107.76672168914126!3d-6.93219019930696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c4a7804a9185%3A0xb2b8ca78f8238e3b!2sInstitut%20Pemerintahan%20Dalam%20Negeri!5e0!3m2!1sid!2sid!4v1684808431337!5m2!1sid!2sid',
];
}
