<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entree;
use App\Models\Categorie;
class EntreeController extends Controller
{
    public function index(){
        $entree=Entree::all();
        $categorie=Categorie::all();
        $entreecount=Entree::count();
        $number = 1;
        return view('entrees.index',compact('entree', 'entreecount', 'categorie','number'));
    }

    public function entree(Request $request){
        $request->validate([
            'medicament' => 'required',
            'quantite' => 'required',
            'prix_unitaire' => 'required',
            'prix_total'=>'required',
            'categorie' => 'required',
            'date_entree' => 'required',
            'expiration'=>'required'
        ]);

        //  dd($request->nom);
        Entree::create([
            'medicament' => $request->medicament,
            'quantite' => $request->quantite,
            'prix_unitaire' => $request->prix_unitaire,
            'prix_total'=>$request->prix_total,
            'categorie_id' => $request->categorie,
            'date_entree'=>$request->date_entree,
            'expiration'=>$request->expiration

        ]);

        //  dd($fournisseurs);
        return redirect()->route('entrees.index')->with('success', 'Produit ajouter avec success');

    }



    public function destroy($id){
        $entree = Entree::find($id);
        $entree->delete();
        return redirect()->route('entrees.index')->with('success', 'suppression du produit avec success');
    }
}
