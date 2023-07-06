<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealTranslation;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isType;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $meal_query = DB::table('meals')->select('meals.id', 'status', 'categories.id as category_id', 'categories.slug as c_slug', 
            'tags.id as tags_id', 'tags.slug as t_slug', 'ingredients.id as ingredient_id', 'ingredients.slug as i_slug')
            ->join('categories', 'meals.category_id', '=', 'categories.id')
            ->join('meals_tags', 'meals.id', '=', 'meals_tags.meals_id')
            ->join('tags', 'tags.id', '=', 'meals_tags.tags_id')
            ->join('meals_ingredients', 'meals.id', '=', 'meals_ingredients.meals_id')
            ->join('ingredients', 'ingredients.id', '=', 'meals_ingredients.ingredients_id')
            ->get();
        if($request->tags){
            $meal_query = $meal_query->whereIn('tags_id', $request->tags);
        }
        /* if($request->lang){
            $meal_query = $meal_query->whereHas('translations', function(Builder $query) use($request){
                $query->where('locale', '=', $request->lang);
            })->get();
        } */
        if($request->per_page){
            $per_page = $request->per_page;
            $first_result = 0;
            if($request->page){
                $first_result = ($request->page - 1)* $per_page;
            }
            
            $meal_query = $meal_query->skip($first_result)->take($per_page);
        }
        

        $meals = $meal_query;

        return response()->json([
            'message' => 'Meal succ fetched',
            'data' => $meals
        ]);
        // return Meal::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show($param)
    {
        return Meal::findOrFail($param);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
