<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() { return view('welcome'); }

    $recipe = \App\Models\Recipe::find(1); //trouver la recette avec l’id 1
echo $recipe->author->name; //affiche le nom de l’auteur

$recipes = \App\Models\User::find(1)->recipes; //get recipes from user id 1
foreach ($recipes as $recipe) {
   //loop on recipes
}
}
