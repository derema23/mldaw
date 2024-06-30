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
                <p class="card-description"> Ajouter un producteur</p>
                <form class="forms-sample" method="POST" action="{{ url('AddPro') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label> <strong style="color: red; size:50px;">*</strong>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom(s)</label> <strong style="color: red; size:50px;">*</strong>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom(s)"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Numéro de téléphone</label> <strong style="color: red; font-size:13px;">*
                            Minimum & maximum 8 chiffres</strong>
                        <input name="telephone" type="number" maxlength="8" minlength="8" class="form-control"
                            id="telephone" name="telephone" placeholder="Entrer le numéro de téléphone" required>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label> <strong style="color: red; size:50px;">*</strong>
                        <input name="adresse" type="text" class="form-control" id="adresse" name="adresse"
                            placeholder="Entrer votre adresse ici.." required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="genre">Genre</label> <strong style="color: red; size:50px;">*</strong>
                            <select class="form-select" id="genre" name="genre" required>
                                <option value="M" selected>Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6"> <strong style="color: red; size:50px;">*</strong>
                            <label for="situation">Situation matrimoniale</label>
                            <select class="form-select" id="situation" name="situation" required>
                                <option value="Célibataire" selected>Célibataire</option>
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Divorcé(e)">Divorcé(e)</option>
                                <option value="Veuf(ve)">Veuf(ve)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse Email</label> <strong style="color: red; size:50px;">*</strong>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Entrer l'Email.." required>
                    </div>
                    {{-- <div class="row" hidden>

                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword4">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" value="mldaw123" placeholder="Password"
                                disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword4">Confirmer Mot de Passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword4"value="mldaw123" placeholder="Password"
                                disabled>
                        </div>

                    </div> --}}
                    <div class="form-group">
                        <label>Uploader une Photo</label>
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
                    <button type="reset" class="btn btn-dark">Annuler</button>
                </form>
            </div>
        </div>
    </div>
@endsection
