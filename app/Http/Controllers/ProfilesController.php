<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{

    //CREATE
    public function createProfiles() {
        $profiles = Profile::All();
        return view('profiles.create_profiles', compact('profiles'));       // On envoie tous les profiles que l'on stock dans la variable $profiles
    }

    public function storeProfile(Request $request) {                        // Permet d'inscrire un nouveau profil à la BDD
        
        $profile = NEW Profile([                                            // Création d'une nouvelle instance "Profile" en remplissant chaque attribus
            'firstname' => $request->get('firstname'),                      // La variable $request représente les entrées de chaque champs du formulaire de création
            'lastname' => $request->get('lastname'),
            'origin' => $request->get('origin'),
            'profession' => $request->get('profession'),
            'biography' => $request->get('biography'),
            'photo' => $request->photo->hashName(),
        ]);

        $request->photo->store('public/img/');                              // On stock la photo uploadée dans le dossier "public/img/"
        
        $profile->save();                                                   // Enfin on sauvegarde dans la BDD
        return redirect('/profiles');
    }

    //READ 
    public function readProfiles() {
        $profiles = Profile::All();
        return view('profiles.read_profiles', compact('profiles'));
    }

    //UPDATE
    public function editProfile($id) {                                  // La variable $id est l'id du profil sélectionné
        $profile = Profile::find($id);                                  // Parmis les profils, on cherche le profil répondant à l'id = $id
        return view('profiles.edit_profiles', compact('profile'));      // On envoie ce profil en variable $profile
    }

    public function updateProfile($id, Request $request) {              // Permet de mettre à jour les informations dans la BDD
        $profile = Profile::find($id);

        if($request->photo) {                                           // Si une photo est présente dans la requête, on entre dans la condition
            Storage::delete('public/img/' . $profile->photo);           // Ici on supprime l'ancienne image grâce à $profile->photo qui a stocké le nom de la photo actuelle
            $profile->photo = $request->photo->hashName();              // On hash un nouveau nom pour la nouvelle photo à insérer dans la BDD
            $request->photo->store('public/img/');                      // On insère notre nouvelle image à notre base de donnée
        };

        $profile->firstname = $request->get('firstname');               // Ici on remplace chaque champ par les entrées des champs du formulaire d'édition
        $profile->lastname = $request->get('lastname');
        $profile->origin = $request->get('origin');
        $profile->profession = $request->get('profession');
        $profile->biography = $request->get('biography');


        $profile->save();
        return redirect('/profiles');
    }

    //DELETE
    public function deleteProfile($id) {                                // Selection du profil étant lié à l'id $id
        $profile = Profile::find($id);                                  // On recherche dans nos instances de Profile lequel correspond à $id
        Storage::delete('public/img/' . $profile->photo);               // On supprime l'image qui lui est lié qui est uploadée sur notre serveur
        $profile->delete();                                             // On supprime tout le profil de la BDD
        return redirect('/profiles');
    }
}
