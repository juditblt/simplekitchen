<?php

namespace App\Http\Controllers;


use App\Http\Requests\IngredientCreatePostRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    // az alkalmazás étel-összetevőinek listázása a ingredients nézeten
    public function index(){
        return view('admin.ingredients', [
            'ingredients' => Ingredient::all()
        ]);
    }

    // új összetevő felvételéhez megjeleníti az add nézetet
    public function add(){
        return view('admin.add');
    }

    // menti az adatbázisba a beírt étel-összetevőt
    public function store(IngredientCreatePostRequest $request){
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->save();
        return redirect()->route('admin.ingredients');
    }
}
