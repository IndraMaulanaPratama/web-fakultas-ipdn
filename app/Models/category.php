<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'CATEGORY';

    public const CREATED_AT = 'CATEGORY_CREATED_AT';
    public const UPDATED_AT = 'CATEGORY_UPDATED_AT';

    protected $fillable = [
      'CATEGORY_NAME',

      'CATEGORY_DELETED_AT',

      'CATEGORY_CREATED_BY',
      'CATEGORY_UPDATED_BY',
      'CATEGORY_DELETED_BY',
    ];
}
