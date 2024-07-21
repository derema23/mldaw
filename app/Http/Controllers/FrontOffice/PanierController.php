<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offre;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class PanierController extends Controller
{
    public function ajout_panier($id)
    {
        $offre = Offre::find($id);


        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($offre, $id);
        Session::put('cart', $cart);

        return back()->with('status', 'Le produit a été ajouté au panier');
    }

    public function cart()
    {

        if (!Session::has('cart')) {
            return view('Front.panier.panier');
        }

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return view('Front.panier.panier', [
            'products' => $cart->items,
            'cart' => $cart
        ]);
    }
    public function supprimer_panier($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect('/panier')->with('status', 'Le produit a été bien supprimé du panier');
    }

    public function modifier_qty(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $Toadd = $request->input('qty');
        $cart->updateQty($id, $Toadd);
        Session::put('cart', $cart);

        return redirect('/panier');
    }

    public function Commander()
    {
        if (!Session::has('cart')) {
            return view('Front.panier.panier');
        }

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return view('Front.panier.WhatsappCommande', [
            'products' => $cart->items,
            'cart' => $cart
        ]);
    }
}
