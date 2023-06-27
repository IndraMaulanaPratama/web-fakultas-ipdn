<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;

    protected $table = 'TESTIMONI';
    protected $primaryKey = 'TESTIMONI_ID';

    protected $fillable = [
      'TESTIMONI_USERNAME',
      'TESTIMONI_CONTENT',
      'TESTIMONI_BATCH',
      'TESTIMONI_IMAGE',
    ];

    protected $attributes = [
      'TESTIMONI_IMAGE' => 'default_testimoni.jpg'
    ];
}
