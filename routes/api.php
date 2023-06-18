<?php

use App\Models\Tag;
use App\Models\Meal;
use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Http\Resources\MealResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\MealsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::get('/meals', function () {
    return view('meals', [
        'heading' => 'Jela svijeta',
        'meals' => Meal::all(),
        'tags' => Tag::all(),
        'ingredients'=> Ingredient::all(),
        'categories'=> Category::all()
        ]
    );
}); */

/* Route::get('/meals/{id}', [MealController::class, 'getOne']);
Route::get('/meals', [MealController::class, 'getAll']);*/
Route::apiResource("meals", MealsController::class);
Route::get('/meals/search/{title}', [MealController::class, 'search']); 
Route::apiResource('tags', TagController::class);
Route::apiResource('ingredients',IngredientController::class);
Route::apiResource('categories', CategoryController::class);


