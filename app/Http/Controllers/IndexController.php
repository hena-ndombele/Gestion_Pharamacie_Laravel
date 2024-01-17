<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;
use App\Models\Categorie;
use App\Models\Entree;


class IndexController extends Controller
{
    public function home(){
       $fournisseurCount = Fournisseur::count();
       $categoriecount=Categorie::count();
       $entreecount=Entree::count();
        return view('index',compact('fournisseurCount', 'categoriecount','entreecount'));
    }
}
