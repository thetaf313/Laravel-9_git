<?php

namespace App\Http\Controllers;

use App\Models\Acces;
use App\Models\Groupe;
use App\Models\Module;

use Illuminate\Http\Request;

class AccesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $access=Acces::all();
        return view('Back.acces.index', compact('access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupes=Groupe::all();
        $modules=Module::all();
        return view('back.acces.add', compact('groupes', 'modules'));
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

            'groupe_id'=>'required|string',
            'module_id'=>'required|string',
        ]);
        $save = new Acces;
        $save->groupe_id=$request->groupe_id;
        $save->module_id=$request->module_id;
        $save->deletable=0;
        $save->etat=0;
        $save->save();
        return Back()->with('message', "Acces enregistré avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acces  $acces
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $access=Acces::all()->where('id', '=', $id)->first();
        return view('back.acces.view', compact('access'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acces  $acces
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupes=Groupe::all();
        $modules=User::all();
        $access=Acces::findOrFail($id);
        return view('back.acces.edit', compact('groupes', 'modules', 'access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acces  $acces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            //'user_id'=>'required'|'string',
            //'groupe_id'=>'required'|'string',
        ]);
        $save = Acces::find($id);
        $save->groupe_id=$request->groupe_id;
        $save->module_id=$request->module_id;
        $save->deletable=0;
        $save->etat=0;
        $save->save();
        return Back()->with('message', "Acces modifiée avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acces  $acces
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acces=Acces::findOrFail($id);
        $acces->delete();
        return Back()->with('message', "Acces supprimée avec succès!");
    }
}
