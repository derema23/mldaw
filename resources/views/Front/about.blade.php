@extends('layouts.Front')

@section('content')
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">

                    <img src="{{ asset('Templates/front/images/mldaw.jpg') }}" alt="mlydaw_logo" style="width: 100%">

                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h3 class="mb-4" style="font-weight: bold;">Bienvenue sur la plateforme digitale M'lydaw</h3>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Êtes-vous une entreprise, une association, une coopérative ou un groupement, un commerçant ou une
                            commerçante, un producteur agricole, un opérateur économique, ou êtes-vous dans les fonctions
                            libérales ? Vous désirez augmenter les profits de vos activités ? Faites appel à M’LYDAW, une
                            entreprise qui à pour raison d’être, la satisfaction de sa lientèle, et qui vous propose une
                            multitude de services vous permettant, d’améliorer, d’optimiser, de rentabiliser, de gérer
                            rationnellement vos activités et opérations.</p>
                        <p>Les observations faites sur plusieurs années, de part les expériences des promoteurs de
                            l’entreprise révèlent, qu’avec la mondialisation, l’environnement technologique innovant
                            accentue le secteur concurrentiel aujourd’hui, l’importance de l’optimisation du trio “qualité,
                            coût, délais” et l’exigence du trio “personnalisation, continuité, flexibilités” des clients.
                            Les entreprises, les organisations, les associations, les opérateurs économiques, les
                            entreprises doivent travailler sur trois (3) piliers “le profit, le peuple et la planète” et
                            pour y parvenir, ils ont besoin d’aide pour mettre l’équilibre dans la gestion quotidienne de
                            leurs activités. </p>
                        <p>Ainsi il s’avère crucial qu’ils délèguent certaines tâches récurrentes de soutien aux
                            professionnels du domaine, pour les assister et les accompagner afin de parvenir à satisfaire la
                            clientèle qui aujourd’hui sont plus exigeant sur les délais, le rapport qualité-prix et l’impact
                            environnemental, c’est dans cette perspective que M’LYDAW SARL à vue le jour avec une mission de
                            “ d’apporter sa contribution, pour la satisfaction de tous les besoins d’optimisation,
                            d’amélioration de la performance et de la gestion quotidienne des activités de ses clients sur
                            tous les aspects”.</p>
                        <p><a href="{{ url('/AfficherOffre') }}" class="btn btn-primary"
                                style="display: block;width: 35%;margin: 0 auto;">Voir Nos
                                Offres</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Abonnez-Vous à notre Newsletter</h2>
                    <span>Recevez nos emails pour rester à jour sur nos dernières offres</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="S'Abonner" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Notre Equipe</span>
                    <p>Nous faisons l'Accompagnement dans la production de la majeure partie des produits disponibles sur la
                        plateforme et la Sélection des offres de vente est faite avec Soin.</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url({{ asset('Templates/front/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far </p>
                                    <p class="name">KEKEH Komi</p>
                                    <span class="position">Manageur Principal</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url({{ asset('Templates/front/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far</p>
                                    <p class="name">ABOETSI Komla Mawuena</p>
                                    <span class="position">Technicien Agricole</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5"
                                    style="background-image: url({{ asset('Templates/front/images/person_1.jpg') }})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far</p>
                                    <p class="name">BOKO Déréma Godwin</p>
                                    <span class="position">Responsable SI</span>
                                </div>
                            </div>
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
@endsection
