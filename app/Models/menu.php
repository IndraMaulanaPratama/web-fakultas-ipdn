<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $table = 'MENU';

    public const CREATED_AT = 'MENU_CREATED_AT';
    public const UPDATED_AT = 'MENU_UPDATED_AT';

    protected $fillable = [
      'MENU_ACCESS',
      'MENU_ORDER',
      'MENU_NAME',
      'MENU_URL',
      'MENU_ICON',

      'MENU_CREATED_AT',
      'MENU_UPDATED_AT',
      'MENU_DELETED_AT',

      'MENU_CREATED_BY',
      'MENU_UPDATED_BY',
      'MENU_DELETED_BY',
    ];
}
