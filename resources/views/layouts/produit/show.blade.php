
@extends('layouts.app')


@section('content')

    <h1>Gestion produit</h1>


    <table class="table table-bordered">

        <tr>
            <th>Nom Complet:</th>
            <td>{{ $produit->nomComplet }}</td>
        </tr>

        <tr>

            <th>categorie:</th>
            <td>{{ $produit->categorie }}</td>

        </tr>

        <tr>

            <th>quantite:</th>
            <td>{{ $produit->quantite }}</td>

        </tr>

        <tr>

            <th>prix:</th>
            <td>$ {{ $produit->prix }}</td>

        </tr>

    </table>

@endsection

