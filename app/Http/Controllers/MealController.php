<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealTranslation;
use Faker\Core\Number;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function getOne(int $id){
        return Meal::findOrFail($id);
    }
    public function getAll(){
        return Meal::all();
    }

    public function search($title){
        return MealTranslation::where('title', $title)->get();
    }
}
