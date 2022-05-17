<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // index nézeten kategóriák, elérhetőek a hozzájuk tartozó receptek is
    public function index(){
        return view('public.index', [
            'categories' => Category::all()
        ]);
    }

    // publikus receptek adatai a show nézeten
    public function show($id){
        $recipe = Recipe::find($id);
        return view('public.show', [
           'recipe' => $recipe
        ]);
    }
}
