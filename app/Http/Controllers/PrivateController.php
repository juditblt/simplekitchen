<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeCreatePostRequest;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function home(){
        $user = Auth::user();
        $recipes = $user->recipes;
        //var_dump($recipes);
        return view('private.home', [
            'user' => $user,
            'recipes' => $recipes
        ]);
    }

    public function create(){
        return view('private.create', [
            'user' => Auth::user() ,
            'categories' => Category::all()
        ]);
    }

    public function store(RecipeCreatePostRequest $request){
        $recipe = new Recipe();
        $recipe->user_id = Auth::id();
        $recipe->category_id = $request->category_id;
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->public = $request->public;
        $recipe->save();

        return redirect()->route('private.home');
    }
}
