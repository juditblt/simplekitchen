<?php

namespace App\Http\Controllers;


use App\Http\Requests\IngredientCreatePostRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        return view('admin.ingredients', [
            'ingredients' => Ingredient::all()
        ]);
    }

    public function add(){
        return view('admin.add');
    }

    public function store(IngredientCreatePostRequest $request){
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->save();
        return redirect()->route('admin.ingredients');
    }
}
