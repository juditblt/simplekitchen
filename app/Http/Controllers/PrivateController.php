<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeCreatePostRequest;
use App\Http\Requests\RecipeDeletePostRequest;
use App\Http\Requests\RecipeUpdatePostRequest;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\R_Ingredient;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    // a bejelentkezett user receptjei a home nézeten
    public function home(){
        $user = Auth::user();
        $recipes = $user->recipes;
        //var_dump($recipes);
        return view('private.home', [
            'user' => $user,
            'recipes' => $recipes
        ]);
    }

    // kiválasztott recept adatai a details nézeten
    public function details($id){
        $recipe = Recipe::find($id);
        return view('private.details', [
            'recipe' => $recipe
        ]);
    }

    // az adott recept adatai a szerkesztés nézeten
    public function edit($id){
        $recipe = Recipe::find($id);
        return view('private.edit', [
            'recipe' => $recipe
        ]);
    }

    // a szerkesztett recept mentése az adatbázisba
    public function update(RecipeUpdatePostRequest $request){
        $recipe = Recipe::find($request->id);
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->public = $request->public;

        /*
        $ingredient = $recipe->ingredients;
        $n = count($ingredient);
        for ($i = 0; $i < $n;$i++){
            $ingredient->pivot->recipe_id[$i] = $request->ingr_id[$i];
            $ingredient->pivot->quantity[$i] = $request->quantity[$i];
        }
        */
        $recipe->save();

        return redirect()->route('private.home');
    }

    // a kiválasztott recept törlése (soft deletes)
    public function delete(RecipeDeletePostRequest $request){
        $recipe = Recipe::find($request->id);
        $recipe->delete();
        return redirect()->route('private.home');

    }

    // create nézetet adja vissza
    public function create(){
        return view('private.create', [
            'user' => Auth::user() ,
            'categories' => Category::all(),
            'ingredients' => Ingredient::all()
        ]);
    }

    // a beírt adatok bekerülnek egy új receptként az adatbázisba
    public function store(RecipeCreatePostRequest $request){
        $recipe = new Recipe();
        $recipe->user_id = Auth::id();
        $recipe->category_id = $request->category_id;
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->public = $request->public;
        $recipe->ingredients->ingredient_id = $request->ingredient_id;
        $recipe->save();

        return redirect()->route('private.home');
    }
}
