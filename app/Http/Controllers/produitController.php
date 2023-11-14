<?php


namespace App\Http\Controllers;


use App\Models\produit;
use Illuminate\Http\Request;


class ProduitController extends Controller
{

    /**
     * Affiche la liste des contacts
     */
    public function index()
    {

        $produits = produit::all();
        return view('produit.index', compact('produits'));

    }


    /**
     * return le formulaire de créationcreation d'un contact
     */
    public function create()
    {

        return view('produit.create');

    }


    /**
     * Enregistre un nouveau contact dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'categorie'=>'required',
            'quantite'=> 'required',
            'prix' => 'required',
        ]);


        $produit = new produit([
            'categorie' => $request->get('categorie'),
            'quantite' => $request->get('quantite'),
            'prix' => $request->get('prix'),
        ]);


        $produit->save();
        return redirect('/')->with('success', 'produit Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un contact spécifique
     */

    public function show($id)
    {

        $produit = produit::findOrFail($id);
        return view('produit.show', compact('produit'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $produit=produit::findOrFail($id);

        return view('produit.edit', compact('produit'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'categorie'=>'required',
            'quantite'=> 'required',
            'prix' => 'required',

        ]);




        $produit= produit::findOrFail($id);
        $produit->categorie = $request->get('categorie');
        $produit->quantite = $request->get('quantite');
        $produit->prix = $request->get('prix');
      


        $contact->update();

        return redirect('/')->with('success', 'produit Modifié avec succès');

    }




    /**
     * Supprime le contact dans la base de données
     */
    public function destroy($id)
    {

        $produit = produit::findOrFail($id);
        $produit->delete();

        return redirect('/')->with('success', 'produit Supprime avec succès');

    }

}
