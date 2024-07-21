@extends('layouts.Back')


@section('content')
    @if (Session::has('status'))
        <div class="alert alert-success">

            {{ Session::get('status') }}

        </div>
        <br>
    @endif

    <!-- affichage des erreurs-->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-danger">

            {{ Session::get('error') }}

        </div>
    @endif

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulaire</h4>
                <p class="card-description"> Modifier une Offre</p>
                <form class="forms-sample" method="POST" action="{{ url('editOffre') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" hidden>
                        <label for="Iduser">Id user</label>
                        <input type="text" class="form-control" id="Iduser" name="id_user"
                            value="{{ $offre->user->id }}" required>
                    </div>
                    <div class="form-group" hidden>
                        <label for="IdOffre">Id Offre</label>
                        <input type="text" class="form-control" id="IdOffre" name="IdOffre" value="{{ $offre->id }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom Produit</label> <strong style="color: red; size:50px;">*</strong>
                        <input type="text" class="form-control" id="nom" name="nom"
                            placeholder="Nom du produit" value="{{ $offre->Nom_produit }}" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="categorie">Catégorie</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="categorie" name="categorie" required>
                                <option value="{{ $offre->categorie }}" selected>{{ $offre->categorie }}</option>
                                <option disabled>----------------------</option>
                                <option value="Agro-alimentaires">Agro-alimentaires</option>
                                <option value="Élevages">Élevages</option>
                                <option value="Matériels Agricoles">Matériels Agricoles</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6"> <strong style="color: red; size:50px;">*</strong>
                            <label for="classe">Classe</label>
                            <select class="form-select" id="classe" name="classe" required>
                                <option value="{{ $offre->classe }}" selected>{{ $offre->classe }}</option>
                                <option disabled>------------------</option>
                                <option value="Produits Bio">Produits Bio</option>
                                <option value="Produits Conventionnels">Produits Conventionnels</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="Conditionnement">Conditionnement</label> <strong
                                style="color: red; size:50px;">*</strong>
                            <input name="conditionnement" type="text" class="form-control" id="Conditionnement"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->conditionnement }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="origine">Origine</label> <strong style="color: red; size:50px;">*</strong>
                            <input name="origine" type="text" class="form-control" id="origine"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->origine }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="unite">Unité de vente</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="unite" name="unite" required>
                                <option value="{{ $offre->unite_vente }}" selected>{{ $offre->unite_vente }}</option>
                                <option disabled>----------------</option>
                                <option value="Kg">Kilogramme(Kg)</option>
                                <option value="Bol">Bol</option>
                                <option value="Panier">Panier</option>
                                <option value="Litre">Litre(l)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prix">Prix unitaire</label> <strong style="color: red; font-size:15px;">*(en F
                                CFA)
                            </strong>
                            <input name="prix" type="number" class="form-control" id="prix"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->prix_unitaire }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="quantite">Quantité disponible</label> <strong
                                style="color: red; font-size:15px;">*(nombre d'unité de Vente)</strong>
                            <input name="quantite" type="number" class="form-control" id="quantite"
                                placeholder="veillez remplir ce champ.." value="{{ $offre->quantite }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="logistique">Logistique</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="logistique" name="logistique" required>
                                <option value="{{ $offre->logistique }}" selected>{{ $offre->logistique }}</option>
                                <option disabled>----------</option>
                                <option value="EXW">EXW</option>
                                <option value="FCA">FCA</option>
                                <option value="FAS">FAS</option>
                                <option value="FOB">FOB</option>
                                <option value="CFR">CFR</option>
                                <option value="CIF">CIF</option>
                                <option value="CPT">CPT</option>
                                <option value="CIP">CIP</option>
                                <option value="DPU">DPU</option>
                                <option value="DAP">DAP</option>
                                <option value="DDP">DDP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Uploader une Photo du produit</label>
                        <input type="file" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12 d-flex align-items-center">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Uploader une image">
                            <span class="input-group-append ms-2">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
