<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function About()
    {
        return view('Front.about');
    }
}
