<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}

$recipe = \App\Models\Recipe::find(1); //trouver la recette avec l’id 1
echo $recipe->author->name; //affiche le nom de l’auteur

$recipes = \App\Models\User::find(1)->recipes; //get recipes from user id 1
foreach ($recipes as $recipe) {
   //loop on recipes
}
