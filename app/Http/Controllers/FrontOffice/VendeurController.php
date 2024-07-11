<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class VendeurController extends Controller
{

    public function RegisterVendeur()
    {
        return view('auth.RegisterUser');
    }

    public function AddUser(Request $request)
    {

        $numb = str_split($request->input('telephone'));
        $comp = (int)($numb[0]);
        if ($comp == 9 or $comp == 7 or $comp == 2) {


            // PARTIE ENVOI SMS
            $basic  = new \Vonage\Client\Credentials\Basic("636f0064", "u5DEQtJMDoTGgRzK");
            $client = new \Vonage\Client($basic);
            $numberTo = $request->input('telephone');
            $response = $client->sms()->send(
                new \Vonage\SMS\Message\SMS("228" . $numberTo, 'M\'LYDAW', 'Votre Compte a été créé avec succès. Merci pour votre Confiance.')
            );

            //$message = $response->current();

            // if ($message->getStatus() == 0) {
            //     echo "The message was sent successfully\n";
            // } else {
            //     echo "The message failed with status: " . $message->getStatus() . "\n";
            // }
            // FIN PARTIE ENVOI SMS

            $this->validate($request, [
                'telephone' => 'unique:users|max:8|min:8',
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $user = new User();

            $user->nom = $request->input('nom');
            $user->prenom = $request->input('prenom');
            $numtemp = '+228' . $request->input('telephone');
            $user->telephone = $numtemp;
            $user->email = $request->input('email');
            // bcrypt pour crypter le mot de passe en base & Hash() pr le decrypter
            $user->password = bcrypt($request->input('password'));
            $user->status = 1;
            $user->role = 'Vendeur';

            $user->remember_token = Str::random(10);

            $user->save();

            //ENVOI EMAIL BIENVENUE
            Mail::to($request->input('email'))
                ->send(new HelloMail());

            return redirect('/RegisterVendeur')->with('status', 'Compte Vendeur créé avec succès !!');
        } else {

            return back()->with('error', 'Le numero de téléphone que vous avez entré est invalide, veillez reprendre svp');
        }
    }
}
