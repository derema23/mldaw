<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Offre;

class AdminController extends Controller
{

    public function dashboard()
    {
        $users = User::all();
        $offres = Offre::all();

        $userProducteur = User::where('role', '=', 'Producteur')->get();
        $userVendeur = User::where('role', '=', 'Vendeur')->get();
        return view(
            'Back.dashboard',
            [
                'users' => $users,
                'offres' => $offres,
                'userProducteur' => $userProducteur,
                'userVendeur' => $userVendeur
            ]
        );
    }

    public function AddAdmin(Request $request)
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
        $user->role = 'Admin';

        $user->remember_token = Str::random(10);


        $user->save();

        return redirect('/register')->with('status', 'Compte Administrateur ajouté avec succès !');
    }

    public function listUser()
    {
        $users = User::all();
        return view('Back.admin.listUser')->with('users', $users);
    }
}
