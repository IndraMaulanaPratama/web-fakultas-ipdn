<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class menu extends Model
{
    use HasFactory;

    protected $table = 'MENU';
    protected $primaryKey = 'MENU_ID';

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

    protected $hidden = [
      'MENU_CREATED_AT',
      'MENU_UPDATED_AT',
      'MENU_DELETED_AT',

      'MENU_CREATED_BY',
      'MENU_UPDATED_BY',
      'MENU_DELETED_BY',
    ];

    // Relasi Menu dengan Submenu
    public function submenu(): HasOneOrMany
    {
        return $this->hasMany(submenu::class, 'SUBMENU_MENU');
    }

    // Menambahkan option menu yang aktif saja
    public function scopeActiveMenu($query)
    {
        return $query->whereNull('MENU_DELETED_AT');
    }

    // Menambahkan option menu yang tidak aktif saja
    public function scopeDeactiveMenu($query)
    {
        return $query->whereNotNull('MENU_DELETED_AT');
    }

    // Mencari berdasarkan MENU_ID
    public function scopeByMenuId($query, $data)
    {
        return $query->whereIn('MENU_ID', $data);
    }

    // Menampilkan semua menu dan submenu yang aktif
    public function scopeAllMenuAndSubmenu($query)
    {
        return $query->with('submenu')
        ->whereNull('MENU_DELETED_AT')
        ->whereNull('SUBMENU_DELETED_AT');
    }

}
