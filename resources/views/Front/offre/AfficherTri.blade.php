@extends('layouts.Front')

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('Templates/front/images/bg_1.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/AfficherOffre') }}">Accueil Shop</a></span>
                    </p>
                    <h1 class="mb-0 bread">{{ $head }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6 d-flex align-items-center">
                    <form action="{{ url('RechOffre') }}" method="POST" class="subscribe-form">
                        @csrf
                        <div class="form-group d-flex">
                            <input type="text" name="NomProduit" class="form-control"
                                placeholder="Entrer un nom de produit...">
                            <input type="submit" value="Rechercher" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="trier" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Trier</a>
                            <div class="dropdown-menu" aria-labelledby="trier">
                                <a class="dropdown-item" aria-disabled="true">-- Catégorie(s) --</a>
                                <a class="dropdown-item"
                                    href="{{ url('/OffreCategorie/Agro-alimentaires') }}">Agro-alimentaires</a>
                                <a class="dropdown-item" href="{{ url('/OffreCategorie/Élevages') }}">Élevages</a>
                                <a class="dropdown-item" href="{{ url('/OffreCategorie/Matériels Agricoles') }}">Matériels
                                    Agricols</a>
                                <a class="dropdown-item" aria-disabled="true">-- Classe(s) --</a>
                                <a class="dropdown-item" href="{{ url('/OffreClasse/Produits Bio') }}">Produits Bio</a>
                                <a class="dropdown-item" href="{{ url('/OffreClasse/Produits Conventionnels') }}">Produits
                                    Conventionnels</a>
                            </div>
                        </li>
                        <li><a href="{{ url('/AfficherOffre') }}" class="active">Tout</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                @if (count($offres) > 0)
                    @foreach ($offres as $offre)
                        <div class="col-md-4 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="{{ url('/details/' . $offre->id) }}" class="img-prod"><img class="img-fluid"
                                        src={{ asset('storage/photo_offres/' . $offre->image) }} alt="Colorlib Template">
                                    {{-- <span class="status">30%</span> --}}
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3 text-center">
                                    <h3><a href="#">{{ $offre->Nom_produit }}</a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span
                                                    class="price-sale">{{ number_format($offre->prix_unitaire, 0, ',', ' ') }}
                                                    F CFA / {{ $offre->unite_vente }}</span></p>
                                        </div>
                                    </div>
                                    <div class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a href="{{ url('/details/' . $offre->id) }}"
                                                class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                <span><i class="ion-ios-menu"></i></span>
                                            </a>
                                            <a href="#"
                                                class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                <span><i class="ion-ios-cart"></i></span>
                                            </a>
                                            {{-- <a href="#"
                                                class="heart d-flex justify-content-center align-items-center ">
                                                <span><i class="ion-ios-heart"></i></span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>
                    <h2 style="margin: 0 auto;">Pas d'offre(s) disponible...</h2>
                    </p>
                @endif

            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>..</span></li>
                            {{-- <li><a href="#">2</a></li> --}}
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
