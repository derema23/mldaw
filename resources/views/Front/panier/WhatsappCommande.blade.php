@extends('layouts.Front')

@section('content')
    <br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h3 class="mb-4">Vous allez être redirigé vers Whatsapp</h3>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p><a href="https://api.whatsapp.com/send?phone=93273029&text=*🛒🛒 VOTRE COMMANDE 🛒🛒*
                                                {{-- commentaire de retour à la ligne --}}
                                                %0A%0AListe des Produits%20:%20
                                                {{-- commentaire de retour à la ligne --}}
                                                @foreach ($products as $prod)

                                                    %0A%0A-%20{{ '#P' . $prod['product_id'] }}%20{{ $prod['product_name'] }}%20{{ $prod['qty'] . ' ' . $prod['product_unite'] }}%20({{ number_format($prod['product_price'], 0, ',', ' ') . ' F CFA / ' . $prod['product_unite'] }}) @endforeach
                                                %0A%0ATotal produits%20:%20{{ count($cart->items) }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0A%0ATotal à payer%20:%20{{ number_format($cart->totalPrice, 0, ',', ' ') . ' F CFA' }}
                                                {{-- commentaire de retour à la ligne --}}
                                                %0A%0A✔️✔️_Votre commande sera prise en charge dans les plus brefs délais_✔️✔️
                                                %0A%0A%0AM'LYDAW,%20La%20passion%20de%20la%20grandeur%20!!!"
                                class="btn btn-primary" style="width: 90%;"><span class="ftco-animate icon-whatsapp"
                                    style="width: 500px;"></span></a></p>
                        <br>
                        <p><a href="{{ url('/cart') }}" style="width: 150px;">&lt; Retour</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
