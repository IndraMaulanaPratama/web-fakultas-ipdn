<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;

    protected $table = 'LOGS';

    public const CREATED_AT = 'LOGS_CREATED_AT';
    public const UPDATED_AT = 'LOGS_UPDATED_AT';

    protected $fillable = [
      'LOGS_USER',
      'LOGS_ACTIVITY',
    ];
}
