<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealTranslation;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isType;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Meal::all();
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
        //
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
