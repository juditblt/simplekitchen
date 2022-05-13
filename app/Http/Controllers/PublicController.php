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

    public function show($id){
        $category = Category::find($id);
        $recipes = Recipe::where([
            ['category_id', $id],
            ['public', 1]
        ])->get();
        return view('public.show', [
            'category' => $category,
            'recipes' => $recipes
        ]);
    }
}
