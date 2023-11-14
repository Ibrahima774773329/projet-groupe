
@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Gestion produit</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('produit/create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Nom Complet</th>
            <th>categorie</th>
            <th>quantite</th>
            <th>prix</th>
            <th>Actions</th>

        </tr>

        @foreach ($produits as $index => $produit)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $produit->nomComplet }}</td>
                <td>{{ $produit->categorie }}</td>
                <td>{{ $produit->quantite }}</td>
                <td>{{ $produit->prix }}</td>
                <td>

                    <form action="{{ url('produit/'. $produit->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('produit/'. $produit->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('produit/'. $produit->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection
