<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals_tags extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'meals_id',
        'tags_id'
    ];
}
