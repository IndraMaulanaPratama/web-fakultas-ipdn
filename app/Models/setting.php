<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $table = 'SETTING';

    public const CREATED_AT = 'SETTING_CREATED_AT';
    public const UPDATED_AT = 'SETTING_UPDATED_AT';

    protected $fillable = [
      'SETTING_REGIONAL',
      'SETTING_FAVICON',
      'SETTING_LOGO',
      'SETTING_HEADER',
      'SETTING_DIRECTOR_IMAGE',
      'SETTING_DIRECTOR_MESSAGE',
      'SETTING_URL_MARS',
      'SETTING_URL_HYMNE',

      'SETTING_UPDATED_AT',
      'SETTING_DELETED_AT',

      'SETTING_CREATED_BY',
      'SETTING_UPDATED_BY',
      'SETTING_DELETED_BY',
    ];

    protected $attributes = [
      'SETTING_FAVICON' => 'favicon.ico',
      'SETTING_LOGO' => 'logo-ipdn.png',
      'SETTING_HEADER' => 'header.jpg',
      'SETTING_URL_MARS' => 'https://youtu.be/Ne-SYQ7GlZw',
      'SETTING_URL_HYMNE' => 'https://youtu.be/7Xro3qZieVQ',
];
}
