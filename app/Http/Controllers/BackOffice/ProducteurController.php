<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ProducteurController extends Controller
{
    public function ajouterPro()
    {
        return view('Back.producteur.ajouterPro');
    }

    public function AddPro(Request $request)
    {

        $numb = str_split($request->input('telephone'));
        $comp = (int)($numb[0]);
        if ($comp == 9 or $comp == 7 or $comp == 2) {

            $this->validate($request, [
                'email' => 'unique:users',
                'telephone' => 'unique:users|max:8|min:8',
                'img' => 'nullable|image|max:2999'
            ]);

            //Enregistrement photo profil


            if ($request->hasFile('img')) {
                // 1: get file name with ext
                $fileNameWithExt = $request->file('img')->getClientOriginalName();
                // 2 : get just file name
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // 3 : get just file extension
                $extension = $request->file('img')->getClientOriginalExtension();
                // 4 : file name to store
                $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

                // 5 : Uploader img
                $path = $request->file('img')->storeAs('public/photo_profils', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            $user = new User();

            $user->nom = $request->input('nom');
            $user->prenom = $request->input('prenom');
            $user->email = $request->input('email');
            // bcrypt pour crypter le mot de passe en base & Hash() pr le decrypter
            $mdp = "mldaw123";
            $user->password = bcrypt($mdp);
            $user->genre = $request->input('genre');
            $user->situation = $request->input('situation');
            $user->adresse = $request->input('adresse');

            $numtemp = '+228' . $request->input('telephone');
            $user->telephone = $numtemp;
            $user->status = 1;
            $user->role = 'Producteur';

            //Enregistrement photo profil
            $user->photo = $fileNameToStore;

            $user->remember_token = Str::random(10);


            $user->save();

            return redirect('/ajouterPro')->with('status', 'L\'utilisateur "' . $user->nom . " " . $user->prenom . '" a été ajouté avec succès !');
        } else {

            return back()->with('error', 'Le numero de téléphone que vous avez entré est invalide, veillez reprendre svp');
        }
    }


    public function ListePro()
    {
        $users = User::where('role', 'Producteur')->get();
        return view('Back.producteur.listePro')->with('users', $users);
    }
}
