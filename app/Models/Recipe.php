<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    // 1 recept 1 kategóriához tartozik:
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // 1 recept 1 userhez tartozik:
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Many To Many kapcsolathoz
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, 'r__ingredients', 'recipe_id', 'ingredient_id')
            ->withPivot('quantity', 'unit');
    }
}
