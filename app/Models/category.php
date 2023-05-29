<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class category extends Model
{
    use HasFactory;

    protected $table = 'CATEGORY';

    public const CREATED_AT = 'CATEGORY_CREATED_AT';
    public const UPDATED_AT = 'CATEGORY_UPDATED_AT';

    protected $fillable = [
      'CATEGORY_NAME',

      'CATEGORY_CREATED_AT',
      'CATEGORY_UPDATED_AT',
      'CATEGORY_DELETED_AT',

      'CATEGORY_CREATED_BY',
      'CATEGORY_UPDATED_BY',
      'CATEGORY_DELETED_BY',
    ];

    public function scopeAddCategory($query, $name)
    {
        return $query->create([
          'CATEGORY_NAME' => $name,
          'CATEGORY_CREATED_AT' => Carbon::now('Asia/Jakarta'),
          'CATEGORY_CREATED_BY' => Auth::user()->role,
        ]);
    }
}
