<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sortie;
use App\Models\Entree;


class SortieController extends Controller
{
    public function index(){
        $sortie=Sortie::all();
        $entree=Entree::all();
        $number=1;
        return view('sorties.index', compact('sortie', 'number','entree'));
    }



    public function sortie(Request $request){
        $request->validate([
            'medicament'=>'required',
            'quantite'=>'required',
            'prix_unitaire'=>'required',
            'prix_total'=>'required',
            'date_sortie'=>'required'
        ]);

        Sortie::create([
            'medicament'=>$request->medicament,
            'quantite'=>$request->quantite,
            'prix_unitaire'=>$request->prix_unitaire,
            'prix_total'=>$request->prix_total,
            'date_sortie'=>$request->date_sortie
        ]);
        return redirect()->route('sorties.index')->with('sucess', 'Produit sortie avec success');
    }
}
