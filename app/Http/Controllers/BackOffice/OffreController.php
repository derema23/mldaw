<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Offre;

class OffreController extends Controller
{


    public function AjouterOffre()
    {
        return view('Front.offre.ajouterOffre');
    }

    public function AfficherOffre()
    {
        $offres = Offre::all();
        return view('Front.offre.AfficherOffre')->with('offres', $offres);
    }

    public function AddOffre(Request $request)
    {
        $this->validate($request, [
            'img' => 'nullable|image|max:2999'
        ]);

        //Enregistrement image produit

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
            $path = $request->file('img')->storeAs('public/photo_offres', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $offre = new Offre();

        $offre->Nom_produit = $request->input('nom');
        $offre->categorie = $request->input('categorie');
        $offre->classe = $request->input('classe');
        $offre->conditionnement = $request->input('conditionnement');
        $offre->origine = $request->input('origine');
        $offre->unite_vente = $request->input('unite');
        $offre->quantite = $request->input('quantite');
        $offre->prix_unitaire = (int)$request->input('prix');
        $offre->logistique = $request->input('logistique');
        //lier offre à user
        $offre->user()->associate($request->input('id_user'));

        //Enregistrement photo profil
        $offre->image = $fileNameToStore;


        $offre->save();

        return redirect('/AjouterOffre')->with('status', 'L\'offre a été ajoutée avec succès !');
    }

    public function details($id)
    {
        $offre = Offre::find($id);
        return view('Front.offre.singleOffre')->with('offre', $offre);
    }

    public function AchatWhatsapp($id)
    {

        $offre = Offre::find($id);
        return view('Front.offre.WhatsappPage')->with('offre', $offre);
    }
}
