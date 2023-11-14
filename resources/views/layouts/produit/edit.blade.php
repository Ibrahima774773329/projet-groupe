
@extends('layouts.app')


@section('content')


    <h1>Modifier produit</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('produit/'. $produit->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nomComplet">Nom:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrer Nom" name="nomComplet" value="{{ $produit->nomComplet }}">

        </div>

        <div class="form-group mb-3">

            <label for="categorie">categorie:</label>
            <input type="text" class="form-control" id="categorie" placeholder="Entrer categorie" name="categorie" value="{{ $produit->categorie }}">

        </div>

        <div class="form-group mb-3">

            <label for="email">quantite:</label>
            <input type="text" class="form-control" id="quantite" placeholder="Entrer quantite" name="quantite" value="{{ $produit->quantite }}">

        </div>

        <div class="form-group mb-3">

            <label for="prix">prix :</label>
            <input type="number" class="form-control" id="prix" placeholder="prix" name="prix" value="{{ $produit->prix }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

    @endsection
