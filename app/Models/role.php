<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class role extends Model
{
    use HasFactory;

    protected $table = 'ROLE';
    protected $primaryKey = 'ROLE_ID';

    public const CREATED_AT = 'ROLE_CREATED_AT';
    public const UPDATED_AT = 'ROLE_UPDATED_AT';

    protected $fillable = [
      'ROLE_NAME',

      'ROLE_CREATED_AT',
      'ROLE_UPDATED_AT',
      'ROLE_DELETED_AT',
    ];

    // Hidden from public
    protected $hidden = [
      'ROLE_ID',
      'ROLE_CREATED_AT',
      'ROLE_UPDATED_AT',
      'ROLE_DELETED_AT',
    ];

    /**
     * Relation Area
     * 1. role
     */

    public function user(): HasOneOrMany
    {
        return $this->hasMany(User::class, 'role');
    }

    /**
    * END OF Relation Area
    */

}
