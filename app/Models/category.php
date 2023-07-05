<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
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

    /** RELATIONSHIP AREA */

    // Relasi Table User
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'CATEGORY_CREATED_BY');
    }

    public function article(): HasMany
    {
        return $this->hasMany(article::class, 'ARTICLE_CATEGORY');
    }

    /** END OF RELATIONSHIP AREA */


    // Active or Null Deleted Date
    public function scopeNullDeleted($query)
    {
        return $query->whereNull('CATEGORY_DELETED_AT');
    }

    // Active or Null Deleted Date
    public function scopeDeleted($query)
    {
        return $query->whereNotNull('CATEGORY_DELETED_AT');
    }

    // Search by Name using where like
    public function scopeLikeName($query, $name)
    {
        return $query->where('CATEGORY_NAME', 'LIKE', '%'. $name .'%');
    }

}
