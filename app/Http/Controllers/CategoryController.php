<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreatePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.categories', [
            'categories' => Category::all()
        ]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(CategoryCreatePostRequest $request ){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.categories');
    }
}
