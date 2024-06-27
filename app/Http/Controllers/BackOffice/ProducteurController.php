<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProducteurController extends Controller
{
    public function ajouterPro()
    {
        return view('Back.producteur.ajouterPro');
    }
}
