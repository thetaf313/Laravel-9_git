<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes=Groupe::all();
        return view('back.groupe.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.groupe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateDate=$request->validate([
            'nom_groupe'=>'required|string',
            'caption'=>'required|string',
            'detail'=>'required|string',
 
    ]);


    $save= new Groupe;
    $save->nom_groupe =$request->nom_groupe;
    $save->dimunitif =$request->caption;
    $save->detail=$request->detail;
    //$save->url =" ";
    $save->deletable=0;
    $save->etat=0;

    $save->save();
    return BACK()->with('message',"Groupe enregistré avec succès !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupes=Groupe::All()->where('id','=',$id)->first();
        return view('Back.groupe.view',compact('groupes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupe=Groupe::findOrFail($id);
        return view('Back.Groupe.edit',compact('groupe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateDate=$request->validate([
            'nom_groupe'=>'required|string',
            'caption'=>'required|string',
            'detail'=>'required|string',

    ]);


    $save= Groupe::find($id);
    $save->nom_groupe =$request->nom_groupe;
    $save->dimunitif =$request->caption;
    $save->detail=$request->detail;
    //$save->url ="/app/".$request->nom_module;
    $save->deletable=0;
    $save->etat=0;

    $save->save();
    return BACK()->with('message',"Modification reussi !");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mods=module::findOrFail($id);
        $mods->delete();
            return BACK()->with("message","Suppression reussi Avec Succès");
    }
}
