@extends('layouts.Front')

@section('content')
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container" id="ficheProduit">

            @if (Session::has('status'))
                <div class="alert alert-success">

                    <div class="message" style="max-width: 350px;margin: 0 auto;">{{ Session::get('status') }}</div>

                </div>
                <br>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">

                    <div class="message" style="max-width: 350px;margin: 0 auto;">{{ Session::get('error') }}</div>

                </div>
                <br>
            @endif

            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/photo_offres/' . $offre->image) }}" alt="image_produit"
                        style="width: 100%;">
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4">{{ $offre->Nom_produit }}</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Auteur : M / Mme {{ $offre->user->nom . ' ' . $offre->user->prenom }} <i
                                class="fa fa-check-circle-o"
                                style="color: skyblue; font-size: 20px"></i><small>certifié</small></p>
                        <p>Prix Unitaire: <span>{{ number_format($offre->prix_unitaire, 0, ',', ' ') }} F CFA /
                                {{ $offre->unite_vente }}</span></p>
                        <p>Catégorie: <span>{{ $offre->categorie }}</span></p>
                        <p>Classe: <span>{{ $offre->classe }}</span></p>
                        <p>Conditionnement: <span>{{ $offre->conditionnement }}</span></p>
                        <p>Origine du produit: <span>{{ $offre->origine }}</span></p>
                        <p>Quantité disponible: <span style="font-weight: bold">{{ $offre->quantite }}
                                {{ $offre->unite_vente }}</span></p>
                        <p>Logistique: <span style="font-weight: bold">{{ $offre->logistique }}</span></p>
                        <br>
                        <p><a href="{{ url('/ajout_panier/' . $offre->id) }}" class="btn btn-primary"
                                style="width: 250px;">Ajouter au panier <i class="ion-ios-cart"></i></a></p>
                        <p><a href="{{ url('/AfficherOffre') }}" style="width: 150px;">&lt; Retour</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
