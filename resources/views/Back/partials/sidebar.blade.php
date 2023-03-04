<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Module;
use App\Models\Client;
use App\Models\User;
use App\Models\Attribution;
use App\Models\Acces;

$attrib = Attribution::all()->where('user_id', '=', Auth::user()->id)->first();
$groupe = $attrib->groupe_id;

$access = Acces::all()->where('groupe_id', '=', $groupe);


?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{asset('back/dist/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="deconnexion.php"><i class="fa fa-power-off"></i></a> </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li><a href="/dashboard"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        @foreach ($access as $acces)
        <li><a href="{{ $acces->module ? $acces->module->url : ''}}" style="color: white;">
            {{ $acces->module ? $acces->module->nom_module : ''}}</a></li>
        @endforeach


        



      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
