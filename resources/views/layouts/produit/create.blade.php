
@extends('layouts.app')


@section('content')

    <h1>Ajouter un produit</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('produit') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nomComplet">Nom Complet:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrez un nom" name="nomComplet">
        </div>

        <div class="form-group mb-3">

            <label for="categorie">categorie:</label>
            <input type="text" class="form-control" id="categorie" placeholder="categorie" name="categorie">

        </div>


        <div class="form-group mb-3">
            <label for="quantite">quantite:</label>
            <input type="quantite" class="form-control" id="quantite" placeholder="quantite" name="quantite">
        </div>

        <div class="form-group mb-3">
            <label for="prix">prix :</label>
            <input type="number" class="form-control" id="prix" placeholder="prix" name="prix">
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection
