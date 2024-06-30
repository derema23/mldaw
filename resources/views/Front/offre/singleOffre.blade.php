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
                            <h2 class="mb-4">{{ $offre->Nom_produit }}</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>Prix Unitaire: <span>{{ number_format($offre->prix_unitaire, 0, ',', ' ') }} F CFA</span></p>
                        <p>Description...</p>
                        <p><a href="#" class="btn btn-primary">Acheter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
