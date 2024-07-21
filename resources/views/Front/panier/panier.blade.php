@extends('layouts.Front')

@section('content')
    <div class="hero-wrap hero-bread" style="background-image: url('Templates/front/images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Accueil</a></span>/
                        <span>Panier</span>
                    </p>
                    <h1 class="mb-0 bread">Mon Panier</h1>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">

            <div class="message" style="max-width: 350px;margin: 0 auto;">{{ Session::get('status') }}</div>

        </div>
        <br>
    @endif

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Nom Produit</th>
                                    <th>Prix Unitaire</th>
                                    <th colspan="2">Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    @if (Session::has('cart'))
                                        @foreach ($products as $prod)
                                            <td class="product-remove"><a
                                                    href="{{ url('/supprimer_panier/' . $prod['product_id']) }}"><span
                                                        class="ion-ios-close"></span></a>
                                            </td>

                                            <td class="image-prod">
                                                <a href="{{ url('/details/' . $prod['product_id']) }}">
                                                    <div class="img"
                                                        style="background-image:url({{ asset('/storage/photo_offres/' . $prod['product_image']) }});">
                                                    </div>
                                                </a>
                                            </td>

                                            <td class="product-name">
                                                <h3>{{ $prod['product_name'] }}</h3>
                                            </td>

                                            <td class="price">
                                                {{ number_format($prod['product_price'], 0, ',', ' ') . ' F CFA / ' . $prod['product_unite'] }}
                                            </td>
                                            <form action="{{ url('/modifier_qty/' . $prod['product_id']) }}" method="post">
                                                @csrf
                                                <td class="quantity">
                                                    <div class="input-group mb-3">
                                                        <input type="number" name="qty"
                                                            class="quantity form-control input-number"
                                                            value="{{ $prod['qty'] }}" min="1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-success"
                                                        style="width: 20px; border: none;outline: none;border-radius: 50%;">+</span></button>
                                                </td>
                                            </form>

                                            <td class="total">
                                                {{ number_format($prod['product_price'] * $prod['qty'], 0, ',', ' ') }}
                                                F CFA
                                            </td>
                                        @endforeach
                                    @else
                                        <td colspan="6">Aucun Produit ajouté dans votre panier...</td>
                                    @endif
                                </tr><!-- END TR-->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Total du Panier</h3>
                        <hr>
                        @if (Session::has('cart'))
                            <p class="d-flex total-price">
                                <span>Total quantité</span>
                                <span>{{ count($cart->items) }}</span>
                            </p>
                            <p class="d-flex total-price">
                                <span>Total Prix</span>
                                <span>{{ $cart->totalPrice }} F CFA</span>
                            </p>
                        @else
                            <p class="d-flex total-price">
                                <span>Total quantité</span>
                                <span>0</span>
                            </p>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>0 F CFA</span>
                            </p>
                        @endif
                    </div>
                    <p><a href="{{ url('/Commander') }}" class="btn btn-primary py-3 px-4">Commander</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
