<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    use HasFactory;

    protected $table = 'SUBMENU';

    public const CREATED_AT = 'SUBMENU_CREATED_AT';
    public const UPDATED_AT = 'SUBMENU_UPDATED_AT';

    protected $fillable = [
      'SUBMENU_MENU',
      'SUBMENU_NAME',
      'SUBMENU_URL',
      'SUBMENU_DELETED_AT',
      'SUBMENU_CREATED_BY',
      'SUBMENU_UPDATED_BY',
      'SUBMENU_DELETED_BY',
    ];
}
