<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;


class Meal extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use Filterable;

    protected $fillable = [
        'id',
        'status',
        'category_id'
    ];
    public $translatedAttributes = ['title', 'description'];
}
