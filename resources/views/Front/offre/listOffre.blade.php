@extends('layouts.Back')

@section('content')
    <br>
    <form action="{{ url('searchOffreback') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3"><input type="number" name="idoffre" min="1" class="form-control" required></div>
            <div class="col-md-1"><button type="submit" class="form-control btn btn-primary"><i
                        class="fa fa-search"></i></button></div>
            <div class="col-md-4"></div>
        </div>
    </form>
    <br>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Offres</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Image</th>
                                <th> Nom Produit</th>
                                <th> Catégorie </th>
                                <th> Classe </th>
                                <th>Nom Producteur</th>
                                <th colspan="3"> Actions </th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($offres) > 0)
                                @foreach ($offres as $offre)
                                    <tr>
                                        <td>{{ $offre->id }}</td>
                                        <td><img src="{{ asset('storage/photo_offres/' . $offre->image) }}"
                                                alt="Image_Produit" style="width: 90%; border-radius: 25%;"></td>
                                        <td> {{ $offre->Nom_produit }} </td>
                                        <td> {{ $offre->categorie }}</td>
                                        <td> {{ $offre->classe }} </td>
                                        <td> {{ $offre->user->nom . ' ' . $offre->user->prenom }}</td>
                                        <td><a href="{{ url('/ModifierOffre/' . $offre->id) }}" class="btn btn-success"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td><a href="{{ url('/PlusInfosOffre/' . $offre->id) }}" class="btn btn-info"><i
                                                    class="fa fa-info"></i></a>
                                        </td>
                                        <td><a href="{{ url('/SupprimerOffre/' . $offre->id) }}" id="delete"
                                                class="btn btn-danger"><i class="fa fa-bitbucket"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7">Pas de données à Afficher</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

    <div>
        <br><br><br><br><br><br><br><br>
    </div>
@endsection
