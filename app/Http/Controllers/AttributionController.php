<?php

namespace App\Http\Controllers;

use App\Models\Attribution;
use App\Models\User;
use App\Models\Groupe;

use Illuminate\Http\Request;

class AttributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributions = Attribution::all();
        return view('back.attribution.index', compact('attributions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupes=Groupe::all();
        $users=User::all();
        return view('back.attribution.add', compact('users', 'groupes'));
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
            'user_id'=>'required|string',
            'groupe_id'=>'required|string',
        ]);
        $save = new Attribution;
        $save->user_id=$request->user_id;
        $save->groupe_id=$request->groupe_id;
        $save->deletable=0;
        $save->etat=0;
        $save->save();
        return Back()->with('message', "Attribution enregistré avec succes");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attributions=Attribution::all()->where('id', '=', $id)->first();
        return view('back.attribution.view', compact('attributions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groupes=Groupe::all();
        $users=User::all();
        $attribution=Attribution::findOrFail($id);
        return view('back.attribution.edit', compact('users', 'groupes', 'attribution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            //'user_id'=>'required'|'string',
            //'groupe_id'=>'required'|'string',
        ]);
        $save = Attribution::find($id);
        $save->user_id=$request->user_id;
        $save->groupe_id=$request->groupe_id;
        $save->deletable=0;
        $save->etat=0;
        $save->save();
        return Back()->with('message', "Attribution modifiée avec succes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribution=Attribution::findOrFail($id);
        $attribution->delete();
        return Back()->with('message', "Attribution supprimée avec succès!");
    }
}
