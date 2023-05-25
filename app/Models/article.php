<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = 'ARTICLE';

    public const CREATED_AT = 'ARTICLE_CREATED_AT';
    public const UPDATED_AT = 'ARTICLE_UPDATED_AT';

    protected $fillable = [
      'ARTICLE_CATEGORY',
      'ARTICLE_TITLE',
      'ARTICLE_CONTENT',
      'ARTICLE_THUMBNAIL',
      'ARTICLE_STATUS',

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
}
