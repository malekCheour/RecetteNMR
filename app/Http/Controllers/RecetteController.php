<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerecetteRequest;
use App\Http\Requests\UpdaterecetteRequest;
use App\Models\recette;
use App\Models\Category;
use App\Models\Ingredient;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->categories = Category::all();
        $this->ingredients = Ingredient::all();
        

        return view('recette.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerecetteRequest $request)
    {
        $categories = 
        $recette = new Recette();
        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->temps_cuisson = $request->temps_cuisson;
        $recette->temps_preparation = $request->temps_preparation;
        $recette->difficulte = $request->difficulte;
        $recette->prix = $request->prix;
        $recette->save();

        $recette->categories()->attach($categories);

        return view('recette.show', compact('recette'));
    }

    /**
     * Display the specified resource.
     */
    public function show(recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterecetteRequest $request, recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recette $recette)
    {
        //
    }
}