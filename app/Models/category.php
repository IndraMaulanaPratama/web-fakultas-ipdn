<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class category extends Model
{
    use HasFactory;

    protected $table = 'CATEGORY';
    protected $primaryKey = 'CATEGORY_ID';

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

    protected $hidden = [
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

    // Relasi Table User
    public function user(): HasOne
    {
      return $this->hasOne(User::class, 'id', 'CATEGORY_CREATED_BY');
    }

    public function scopeNullDeleted($query)
    {
        return $query->whereNull('CATEGORY_DELETED_AT');
    }

}
