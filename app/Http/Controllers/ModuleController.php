<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Image;
use Intervention\Image\Exception\NotReadableException;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules=module::all();
        return view('Back.Module.index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Back.Module.add');
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
            'nom_module'=>'required|string',
            'caption'=>'required|string',
            'image' => 'required|image|mimes:jpeg,png,gif,svg,jpg|max:2048',

    ]);


    $save= new module;
    $save->nom_module =$request->nom_module;
    $save->dimunitif =$request->caption;
    $save->detail=$request->detail;
    $save->url ="/app/".$request->nom_module;
    if ($request->hasFile('image'))
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = 'Ednayas-'.time().'.'.$extension;
        $destinationPath = public_path('/upload/module');
        $resize_image = Image::make($file->getRealPath());
        $resize_image->resize(900, 500)->save($destinationPath.'/'.$filename);
        $destinationPath = $request->file('image')->store('/upload/module');
        $save->image = $filename;
    }
    else
    {
        $save->image = '';
    }

    $save->deletable=0;
    $save->etat=0;

    $save->save();
    return BACK()->with('message',"Module enregistre !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modules=module::All()->where('id','=',$id)->first();
        return view('Back.Module.view',compact('modules'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module=module::findOrFail($id);
        return view('Back.Module.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validateDate=$request->validate([
            'nom_module'=>'required|string',
            'caption'=>'required|string',
            'detail'=>'required|string',

    ]);


    $save= module::find($id);
    $save->nom_module =$request->nom_module;
    $save->dimunitif =$request->caption;
    $save->detail=$request->detail;
    $save->url ="/app/".$request->nom_module;
    $save->deletable=0;
    $save->etat=0;

    $save->save();
    return BACK()->with('message',"Modification reussi !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mods=module::findOrFail($id);
        $mods->delete();
            return BACK()->with("message","Suppression reussi Avec Success");
    }

    public function state($id)
    {
        $module=Module::findOrFail($id);
        if ($module->etat==0)
        {
            $message='Module activé';
            $etat=1;
        }
        else if ($module->etat==1)
        {
            $etat=0;
            $message='Module desactivé';
        }
        $module->etat=$etat;
        $module->save();
        return back()->with('message', $message);
    }

}
