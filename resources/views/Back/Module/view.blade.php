

@extends('Back.index')
@section('content')
<div class="content-wrapper">

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('Module.index')}}" class="btn btn-success" >Liste Des Modules</a>
              <h2 ><center><strong>Fiche Module</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content">


      <div class="info-box">

      <div class="table-responsive">
                    <ul>
                     <li>Nom: <strong> {{$modules->nom_module}}</strong></li>
                     <li>Dimunitif: <strong>{{$modules->dimunitif}}</strong></li>
                     <li>Details:  <strong>{{$modules->detail}}</strong></li>


                    </ul>
      </div>


    </div>
</div>
                            </div>
                            </div>

                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

@endsection



