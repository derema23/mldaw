@extends('layouts.Back')


@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulaire</h4>
                <p class="card-description"> Plus d'informations sur l'Offre</p>
                <form class="forms-sample" method="POST" action="{{ url('editOffre') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="nom">Nom Producteur</label> <strong style="color: red; size:50px;">*</strong>
                            <input type="text" class="form-control" id="nom" name="nom"
                                value="{{ $offre->user->nom . ' ' . $offre->user->prenom }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nom">Téléphone Producteur</label> <strong
                                style="color: red; size:50px;">*</strong>
                            <input type="text" class="form-control" id="nom" name="nom"
                                value="{{ $offre->user->telephone }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nom">Email Producteur</label> <strong style="color: red; size:50px;">*</strong>
                            <input type="text" class="form-control" id="nom" name="nom"
                                value="{{ $offre->user->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nom">Nom Produit</label> <strong style="color: red; size:50px;">*</strong>
                        <input type="text" class="form-control" id="nom" name="nom"
                            value="{{ $offre->Nom_produit }}">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="categorie">Catégorie</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="categorie" name="categorie">
                                <option value="{{ $offre->categorie }}" selected>{{ $offre->categorie }}</option>
                                <option disabled>----------------------</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6"> <strong style="color: red; size:50px;">*</strong>
                            <label for="classe">Classe</label>
                            <select class="form-select" id="classe" name="classe">
                                <option value="{{ $offre->classe }}" selected>{{ $offre->classe }}</option>
                                <option disabled>------------------</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Conditionnement">Conditionnement</label> <strong
                                style="color: red; size:50px;">*</strong>
                            <input name="conditionnement" type="text" class="form-control" id="Conditionnement"
                                value="{{ $offre->conditionnement }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="origine">Origine</label> <strong style="color: red; size:50px;">*</strong>
                            <input name="origine" type="text" class="form-control" id="origine"
                                value="{{ $offre->origine }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="unite">Unité de vente</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="unite" name="unite">
                                <option value="{{ $offre->unite_vente }}" selected>{{ $offre->unite_vente }}</option>
                                <option disabled>----------------</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prix">Prix unitaire</label> <strong style="color: red; font-size:15px;">*(en F
                                CFA)
                            </strong>
                            <input name="prix" type="number" class="form-control" id="prix"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->prix_unitaire }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="quantite">Quantité disponible</label> <strong
                                style="color: red; font-size:15px;">*(nombre d'unité de Vente)</strong>
                            <input name="quantite" type="number" class="form-control" id="quantite"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->quantite }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="logistique">Logistique</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="logistique" name="logistique">
                                <option value="{{ $offre->logistique }}" selected>{{ $offre->logistique }}</option>
                                <option disabled>----------</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Photo du produit</label>
                        {{-- <input type="file" name="img" class="file-upload-default"> --}}
                        <div class="input-group col-xs-12 d-flex align-items-center">
                            <img src="{{ asset('storage/photo_offres/' . $offre->image) }}" alt="image_offre"
                                style="width: 25%;">
                        </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-primary me-2">Enregistrer</button> --}}
                </form>
                <a href="{{ url('/listOffre') }}" class="btn btn-success">Retour</a>
            </div>
        </div>
    </div>
@endsection
