<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Offre;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
            //$path = $request->file('img')->storeAs('public/photo_offres', $fileNameToStore);
            Image::make($request->file('img'))->resize(1000, 800)->save(storage_path('app/public/photo_offres/' . $fileNameToStore));
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

    public function listOffre()
    {
        $offres = Offre::all();
        return view('Front.offre.listOffre')->with('offres', $offres);
    }

    public function AchatWhatsapp($id)
    {

        $offre = Offre::find($id);
        return view('Front.offre.WhatsappPage')->with('offre', $offre);
    }

    public function modifierOffre($id)
    {
        $offre = Offre::find($id);
        return view('Front.offre.modifierOffre')->with('offre', $offre);
    }

    public function editOffre(Request $request)
    {
        $this->validate($request, [
            'img' => 'nullable|image|max:2999'
        ]);
        $offre = Offre::find($request->input('IdOffre'));
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
            // Supprimer l'ancienne image si existe
            if ($offre->image != 'noimage.jpg') {
                Storage::delete('public/photo_offres/' . $offre->image);
            }

            // Après enregistrement dans storage contenu prend $fileNameToStore
            $offre->image = $fileNameToStore;
        }

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


        $offre->update();

        return redirect('/ModifierOffre/' . $request->input('IdOffre'))->with('status', 'L\'offre a été modifiée avec succès !');
    }

    public function PlusInfosOffre($id)
    {
        $offre = Offre::find($id);
        return view('Front.offre.InfosOffre')->with('offre', $offre);
    }

    public function SupprimerOffre($id)
    {
        $offre = Offre::find($id);

        if ($offre->image != 'noimage.jpg') {
            //suppression de l'image dans le storage
            Storage::delete('public/photo_offres/' . $offre->image);
        }
        $offre->delete();
        return back()->with('status', 'L\'offre a été supprmée avec succès');
    }

    public function MesOffres($id)
    {
        $offres = Offre::where('user_id', '=', $id)->get();
        return view(
            'Front.offre.mesOffres',
            ['offres' => $offres,]
        );
    }

    public function rechOffreCategorie($categorie)
    {
        $offres = Offre::where('categorie', 'like', '%' . $categorie . '%')->get();
        $head = "Catégorie : " . $categorie;
        return view('Front.offre.AfficherTri', [
            'offres' => $offres,
            'head' => $head,
        ]);
    }

    public function rechOffreClasse($classe)
    {
        $offres = Offre::where('classe', 'like', '%' . $classe . '%')->get();
        $head = "Classe : " . $classe;
        return view('Front.offre.AfficherTri', [
            'offres' => $offres,
            'head' => $head,
        ]);
    }

    public function RechOffre(Request $request)
    {
        $nom = $request->input('NomProduit');

        $offres = Offre::where('Nom_Produit', 'like', '%' . $nom . '%')->get();
        $head = "Résultat(s) pour : `"  . $nom . "`";
        return view('Front.offre.AfficherTri', [
            'offres' => $offres,
            'head' => $head,
        ]);
    }

    public function SearchOffreback(Request $request)
    {
        // $id = $request->input('id');
        $offre = Offre::find($request->input('idoffre'));
        return view('Front.offre.ResultOffreBack')->with('offre', $offre);
    }
}
