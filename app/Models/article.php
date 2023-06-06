<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class article extends Model
{
    use HasFactory;

    protected $table = 'ARTICLE';
    protected $primaryKey = 'ARTICLE_ID';

    public const CREATED_AT = 'ARTICLE_CREATED_AT';
    public const UPDATED_AT = 'ARTICLE_UPDATED_AT';

    protected $fillable = [
      'ARTICLE_CATEGORY',
      'ARTICLE_TITLE',
      'ARTICLE_CONTENT',
      'ARTICLE_THUMBNAIL',
      'ARTICLE_STATUS',

      'ARTICLE_CREATED_AT',
      'ARTICLE_DELETED_AT',
      'ARTICLE_UPDATED_AT',

      'ARTICLE_CREATED_BY',
      'ARTICLE_UPDATED_BY',
      'ARTICLE_DELETED_BY',
    ];

    protected $hidden = [
      'ARTICLE_CREATED_AT',
      'ARTICLE_DELETED_AT',
      'ARTICLE_UPDATED_AT',

      'ARTICLE_CREATED_BY',
      'ARTICLE_UPDATED_BY',
      'ARTICLE_DELETED_BY',
    ];

    protected $attributes = [
      'ARTICLE_THUMBNAIL' => 'default_thumbnail.jpg',
      'ARTICLE_STATUS' => 2, // Draft
    ];

    /** RELATIONSHIP AREA */

    // Relasi Table User
    public function user(): BelongsTo
    {
        // TODO:: Selesaikan Relasi ke user
        return $this->belongsTo(User::class, 'ARTICLE_CREATED_BY');
    }

    // Relation to category
    public function category(): HasOne
    {
        return $this->hasOne(category::class, 'CATEGORY_ID', 'ARTICLE_CATEGORY');
    }

    /** END OF RELATIONSHIP AREA */


    // Active or Null Deleted Date Field
    public function scopeNullDeleted($query)
    {
        return $query->whereNull('ARTICLE_DELETED_AT');
    }

    // Search Data Using where LIKE on field Title
    public function scopeSearchTitle($query, $title)
    {
        return $query->where('ARTICLE_TITLE', 'LIKE', '%'. $title .'%');
    }

    // Search Data Bsed On Kategori
    public function scopeCategory($query, $category)
    {
        return $query->where('ARTICLE_CATEGORY', $category);
    }

    // Search Data Based On Status
    public function scopeStatus($query, $status)
    {
        return $query->where('ARTICLE_STATUS', $status);
    }
}
