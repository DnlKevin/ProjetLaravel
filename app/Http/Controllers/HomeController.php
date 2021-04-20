<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index() {

        $recipes = \App\Models\Recipe::all(); //get all recipes

        return view('welcome',array(
            'recipes' => $recipes
        ));

    }


}
