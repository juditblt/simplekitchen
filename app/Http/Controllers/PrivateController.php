<?php

namespace App\Http\Controllers;

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
            'categories' => Category::all(),
            'recipes' => $recipes
        ]);
    }
}
