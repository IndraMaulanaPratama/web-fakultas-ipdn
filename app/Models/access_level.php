<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class access_level extends Model
{
    use HasFactory;

    protected $table = 'ACCESS_LEVEL';

    public const CREATED_AT = 'ACCESS_CREATED_AT';
    public const UPDATED_AT = 'ACCESS_UPDATED_AT';

    protected $fillable = [
      'ACCESS_ROLE',
      'ACCESS_NAME',
      'ACCESS_READ',
      'ACCESS_DETAIL',
      'ACCESS_CREATE',
      'ACCESS_UPDATE',
      'ACCESS_SOFT_DELETE',
      'ACCESS_DELETE',
      'ACCESS_HIDE',
      'ACCESS_SHOW',

      'ACCESS_DELETED_AT',
      'ACCESS_CREATED_BY',
      'ACCESS_UPDATED_BY',
      'ACCESS_DELETED_BY',
    ];
}
