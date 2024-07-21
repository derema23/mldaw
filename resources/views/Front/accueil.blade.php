@extends('layouts.Front')


@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(Templates/front/images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Accompagnement de la production à la vente</h1>
                            <p><a href="{{ url('/About') }}" class="btn btn-primary">Plus de Details</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(Templates/front/images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Produits 100% bio &amp; conventionnels </h1>
                            {{-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> --}}
                            <p><a href="{{ url('/About') }}" class="btn btn-primary">Plus de Details</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(Templates/front/images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">MarketPlace pour Vos Offres</h1>
                            <h2 class="subheading mb-4">Offre de Vente &amp; d'Achat</h2>
                            <p><a href="{{ url('/About') }}" class="btn btn-primary">Plus de Details</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Livraison Via Nos Partenaires</h3>
                            <span>Prix Abordable</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Produits Frais</h3>
                            <span>Produits Suivis et Emtreposés de manière Optimale</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Qualité Supérieure</h3>
                            <span>Que des Produits de Qualité Sélectionnés par nos Soins</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Assistance</h3>
                            <span>24h/24 7jours/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-category ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 order-md-last align-items-stretch d-flex" id="voir">
                            <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                                style="background-image: url(Templates/front/images/category.jpg);">
                                <div class="text text-center" style="color: #333;font-weight: bold;">
                                    <h2>Produits Bio &amp; Conventionnels</h2>
                                    <p>Nous préservons votre Santé de part la qualité de nos Produits</p>
                                    <p><a href="{{ url('/AfficherOffre') }}" class="btn btn-primary">Voir Nos Offres</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                                style="background-image: url(Templates/front/images/tof4.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Fruits</a></h2>
                                </div>
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end"
                                style="background-image: url(Templates/front/images/tof1.jpg);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Légumes</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                        style="background-image: url(Templates/front/images/tof2.jpg);" id="volailesimg">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Volailes</a></h2>
                        </div>
                    </div>
                    <div class="category-wrap ftco-animate img d-flex align-items-end"
                        style="background-image: url(Templates/front/images/tof3.jpg);">
                        <div class="text px-3 py-1">
                            <h2 class="mb-0"><a href="#">Graines</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Produits en Vente</span>
                    <h2 class="mb-4">Nos Dernières Offres</h2>
                    <p>Nous faisons le nécessaire avoir le meilleur apport Qualité/Prix</p>
                </div>
            </div>
        </div>

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

        <div class="container">

            <div class="row">

                @if (count($offres) > 0)
                    @foreach ($offres as $offre)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="{{ url('/details/' . $offre->id) }}" class="img-prod"><img class="img-fluid"
                                        src="storage/photo_offres/{{ $offre->image }}" alt="Colorlib Template">
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
                                            <a href="{{ url('/ajout_panier/' . $offre->id) }}"
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
                    <p style="text-align: center;">
                    <h2>Pas d'offre(s) disponibles...</h2>
                    </p>
                @endif

            </div>

            {{-- <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid"
                                src="Templates/front/images/product-5.jpg" alt="Colorlib Template">
                            <span class="status">30%</span>
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Tomatoe</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                            class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#"
                                        class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#"
                                        class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid"
                                src="Templates/front/images/product-6.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Brocolli</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#"
                                        class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#"
                                        class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid"
                                src="Templates/front/images/product-7.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Carrots</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#"
                                        class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#"
                                        class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid"
                                src="Templates/front/images/product-8.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Fruit Juice</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#"
                                        class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#"
                                        class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- <section class="ftco-section img" style="background-image: url(Templates/front/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">Best Price For You</span>
                    <h2 class="mb-4">Deal of the day</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    <h3><a href="#">Spinach</a></h3>
                    <span class="price">$10 <a href="#">now $5 only</a></span>
                    <div id="timer" class="d-flex mt-5">
                        <div class="time" id="days"></div>
                        <div class="time pl-3" id="hours"></div>
                        <div class="time pl-3" id="minutes"></div>
                        <div class="time pl-3" id="seconds"></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Témoignages</span>
                    <h2 class="mb-4">Nos Clients satisfaits témoignent</h2>
                    <p>Nous faisons l'Accompagnement dans la production de la majeure partie des produits disponibles sur la
                        plateforme et la Sélection des offres de vente est faite avec Soin. Ceux ci-dessous en témoignent
                    </p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url(Templates/front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    {{-- <p class="name">Garreth Smith</p> --}}
                                    <span class="position">Client</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url(Templates/front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    {{-- <p class="name">Garreth SmithSon</p> --}}
                                    <span class="position">Producteur</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url(Templates/front/images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    {{-- <p class="name">Garreth Smith</p> --}}
                                    <span class="position">Producteur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- section partenaire --}}
    {{-- <hr> --}}
    {{-- <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="Templates/front/images/partner-1.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="Templates/front/images/partner-2.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="Templates/front/images/partner-3.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="Templates/front/images/partner-4.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="Templates/front/images/partner-5.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- fin section partenaire --}}

    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Souscrire à notre Newsletter</h2>
                    <span>Vous recevrez des emails sur nos derniers Projets et Offres</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Entrer votre email">
                            <input type="submit" value="Souscrire" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
