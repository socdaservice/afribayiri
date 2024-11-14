<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function store(Request $request){
        //validation des données du formulaire
        $request->validate([
            'nom' =>'required',
            'email' => 'required|email',
            'services' => 'required|array',
            'services.*' => 'in:Web design,Design Application Mobile,Collaboration,Autres',
            'budget' => 'required|numeric',
            'message' => 'nullable',
        ]);

        //Nouvelle instance du modele de service
        $service = new Service();
        $service->nom = $request->input('nom');
        $service->email = $request->input('email');
        $service->services = $request->input('services');
        $service->budget = $request->input('budget');
        $service->message = $request->input('message');

        //Enregistrement dans la base de données
        $service->save();

        //redirection
        return redirect()->route('services.index')->with('success','Services enregistré avec succès !');
    }
}
