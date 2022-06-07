<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreatePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // az alkalmazás kategóriáinak listázása a categories nézeten
    public function index(){
        return view('admin.categories', [
            'categories' => Category::all()
        ]);
    }

    // új kategória felvételéhez megjeleníti a create nézetet
    public function create(){
        return view('admin.create');
    }

    // menti az adatbázisba a beírt kategóriát
    public function store(CategoryCreatePostRequest $request ){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.categories');
    }
}
