<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::All();
        return view('Back.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back.client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
                'nom'=>'required|string',
                'prenom'=>'required|string',
                'email'=>'required|string',
                'telephone'=>'required',
                'adresse'=>'required',
        ]);


        $save= new Client;
        $save->nom =$request->nom;
        $save->prenom =$request->prenom;
        $save->email =$request->email;
        $save->telephone =$request->telephone;
        $save->adresse =$request->adresse;
        $save->entreprise=$request->entreprise;
        $save->deletable=0;
        $save->etat=0;
        $save->save();
        return BACK()->with('message',"Client enregistré avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::All()->where('id','=',$id)->first();
        return view('Back.client.view', compact('clients'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::findOrFail($id);
        return view('Back.client.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|string',
            'telephone'=>'required',
            'adresse'=>'required',
    ]);

 
    $save= Client::find($id);
    $save->nom =$request->nom;
    $save->prenom =$request->prenom;
    $save->email =$request->email;
    $save->telephone =$request->telephone;
    $save->adresse =$request->adresse;
    $save->entreprise=$request->entreprise;
    $save->deletable=0;
    $save->etat=0;
    $save->save();
    return BACK()->with('message',"Modification reussi avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $clients = Client::findOrFail($id);
    $clients->delete();
        return BACK()->with("message","Client Supprimer Avec Success");
    }
}
