<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Acces;
use App\Models\Attribution;
use App\Models\Groupe;
use App\Models\Module;
use App\Models\User;



class NavigationController extends Controller
{
    public function index() : View
    {
        $attrib = Attribution::where('user_id', '=', Auth::user()->id)->first();
        $grp = $attrib->groupe_id;
        $access = Acces::all()->where('groupe_id', '=', $grp);

        return view('Back.partials.sidebar', compact('access'));
    }
}
