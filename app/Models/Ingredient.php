<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use HasFactory, SoftDeletes;

    // Many To Many kapcsolat
    public function recipes(){
        return $this->belongsToMany(Recipe::class, 'r__ingredients', 'ingredient_id', 'recipe_id')
            ->withPivot('quantity', 'unit');
    }
}
