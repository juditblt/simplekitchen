<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // index nézeten kategóriák, és összetevők, ezek alapján elérhetőek a receptek
    public function index(){
        return view('public.index', [
            'categories' => Category::all(),
            'ingredients' => Ingredient::all()
        ]);
    }

    // publikus receptek adatai a show nézeten (hozzávalók is)
    public function show($id){
        $recipe = Recipe::find($id);
        return view('public.show', [
           'recipe' => $recipe
        ]);
    }
}
