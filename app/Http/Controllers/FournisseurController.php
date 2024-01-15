<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        $number = 1;
        return view('fournisseurs.index', compact('fournisseurs', 'number'));
    }





    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
        ]);

        //  dd($request->nom);
        Fournisseur::create([
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone

        ]);

        //  dd($fournisseurs);
        return redirect()->route('fournisseurs.index')->with('success', 'création du founisseur avec success');
    }
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();
        return redirect()->route('fournisseurs.index')->with('success', 'suppression du founisseur avec success');

    }
}
