<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class submenu extends Model
{
    use HasFactory;

    protected $table = 'SUBMENU';

    public const CREATED_AT = 'SUBMENU_CREATED_AT';
    public const UPDATED_AT = 'SUBMENU_UPDATED_AT';

    protected $fillable = [
      'SUBMENU_MENU',
      'SUBMENU_ORDER',
      'SUBMENU_NAME',
      'SUBMENU_URL',

      'SUBMENU_CREATED_AT',
      'SUBMENU_UPDATED_AT',
      'SUBMENU_DELETED_AT',

      'SUBMENU_CREATED_BY',
      'SUBMENU_UPDATED_BY',
      'SUBMENU_DELETED_BY',
    ];

    protected $hidden = [
      'SUBMENU_CREATED_AT',
      'SUBMENU_UPDATED_AT',
      'SUBMENU_DELETED_AT',

      'SUBMENU_CREATED_BY',
      'SUBMENU_UPDATED_BY',
      'SUBMENU_DELETED_BY',
    ];

    // Relasi Submenu dengan Menu
    public function menu(): BelongsTo
    {
        return $this->belongsTo(menu::class, 'MENU_ID');
    }
}
