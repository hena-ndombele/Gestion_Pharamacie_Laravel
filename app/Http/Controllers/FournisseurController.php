<?php

namespace App\Http\Controllers;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index(){
    return view('fournisseurs.index');
    }




    
    public function store(Request $request){
        $request->validate([
        
         'nom'=>'required',
         'postnom'=>'required',
         'prenom'=>'required',
         'telephone'=>'required',
]);
        //  dd($request->agent  s);
         $fournisseurs=Fournisseur::create([
          
            'Nom '=> $request->nom,
            'Postnom' =>$request->postnom,
            'Prenom'=>$request->prenom,
            'Telephone'=>$request->telephone

         ]);

        //  dd($fournisseurs);
         return redirect()->route('fournisseurs.index')->with('succes', 'Le fournisseur a été ajouté avec succès');
       



    }
}
