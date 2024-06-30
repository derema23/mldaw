<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class VendeurController extends Controller
{

    public function RegisterVendeur()
    {
        return view('auth.RegisterUser');
    }

    public function AddUser(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();

        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        // bcrypt pour crypter le mot de passe en base & Hash() pr le decrypter
        $user->password = bcrypt($request->input('password'));
        $user->status = 1;
        $user->role = 'Vendeur';

        $user->remember_token = Str::random(10);


        $user->save();

        return redirect('/RegisterVendeur')->with('status', 'Compte Vendeur créé avec succès !!');
    }
}
