<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecettesController extends Controller
{
    function index () {
        return view ('welcome');
    }
    public function show($recipe_name) {
        $recipe = \App\Models\Recipe::where('id',$recipe_name)->first(); //get first recipe with recipe_nam == $recipe_name
        $author = \App\Models\User::find($recipe->author_id);
        return view('recipes/single',array( //Pass the recipe to the view
            'recipe' => $recipe,
            'author' => $author

        ));
     }
     
}
