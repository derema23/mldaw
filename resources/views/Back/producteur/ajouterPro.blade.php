@extends('layouts.Back')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Formulaire</h4>
                <p class="card-description"> Ajouter un producteur</p>
                <form class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName2">Prénom(s)</label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Prénom(s)">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adresse Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Genre</label>
                        <select class="form-select" id="exampleSelectGender">
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Uploader une Photo</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12 d-flex align-items-center">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Uploader une image">
                            <span class="input-group-append ms-2">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Localité</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Enregistrer</button>
                    <button type="reset" class="btn btn-dark">Annuler</button>
                </form>
            </div>
        </div>
    </div>
@endsection
