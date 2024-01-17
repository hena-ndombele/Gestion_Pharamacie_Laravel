<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categoriecount=Categorie::count();
        $categories=Categorie::all();
        $number=1;
        return view('categories.index',compact('categories','number'));
    }

    public function cate(Request $request){
        $request->validate([
            'categorie'=>'required|unique:categories',
            
            ]);


            Categorie::create([
                'categorie'=>$request->categorie
            ]);
            return redirect()->route('categories.index')->with('success', 'création du catégorie avec success');

    }
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index')->with('success', 'suppression du categorie de produits avec success');

    }
}
