<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meals_ingredients extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'meals_id',
        'ingredients_id'
    ];
}
