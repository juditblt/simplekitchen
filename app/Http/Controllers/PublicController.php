<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('public.index', [
            'categories' => Category::all()
        ]);
    }

    public function details($id){
        $recipes = Recipe::where([
            ['id', $id],
            ['public', 1]
        ])->get();
        return view('public.details', [
           'recipes' => $recipes
        ]);
    }
}
