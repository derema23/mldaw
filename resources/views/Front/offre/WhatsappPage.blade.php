@extends('Front.accueil')

@section('content')
    <br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/photo_offres/' . $offre->image) }}" alt="image_produit" style="width: 100%">
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h3 class="mb-4">Vous allez être redirigé vers Whatsapp</h3>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p><a href="https://api.whatsapp.com/send?phone=99003828&text=*VOTRE COMMANDE :*
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DNom du Produit%20:%20{{ $offre->Nom_produit }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DPrix Unitaire%20:%20{{ number_format($offre->prix_unitaire, 0, ',', ' ') }} F CFA /
                                {{ $offre->unite_vente }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DCatégorie%20:%20{{ $offre->categorie }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DClasse%20:%20{{ $offre->classe }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DConditionnement%20:%20{{ $offre->conditionnement }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DOrigine du Produit%20:%20{{ $offre->origine }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DQuantité Disponible%20:%20{{ $offre->quantite }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0DLogistique%20:%20{{ $offre->logistique }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0D*Veuillez mentionner la quantité désirée*%20:%20"
                                class="btn btn-primary" style="width: 100px;"><span
                                    class="ftco-animate icon-whatsapp"></span></a></p>
                        <br>
                        <p><a href="{{ url('/AfficherOffre') }}" style="width: 150px;">&lt; Retour</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
