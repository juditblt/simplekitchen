<?php

namespace App\Http\Controllers;


use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index(){
        return view('admin.ingredients', [
            'ingredients' => Ingredient::all()
        ]);
    }
}
