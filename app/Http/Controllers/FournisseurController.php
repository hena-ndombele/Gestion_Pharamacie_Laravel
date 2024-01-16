<?php

namespace App\Http\Controllers;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index(){
    return view('fournisseurs.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'postnom' => 'required', 
            'prenom' => 'required',
            'telephone' => 'required',
        ]);
    
        $fournisseur = Fournisseur::create([
            'Nom' => $request->nom,
            'Postnom' => $request->postnom,
            'Prenom' => $request->prenom,
            'Telephone' => $request->telephone,
        ]);
    
       // return redirect()->route('fournisseurs.index')->with('succes', 'Le fournisseur a été ajouté avec succès');
   
   return redirect()->back()->with('fournisseur');
    }
}
