

@extends('Back.index')
@section('content')
<div class="content-wrapper"> 

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('client.index')}}" class="btn btn-success" >Liste Des clients</a>
              <h2 ><center><strong>Details D'un Clients</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <div class="content">

      
      <div class="info-box">
      
      <div class="table-responsive">
                    <ul>
                     <li>Nom: <strong> {{$clients->nom}}</strong></li>
                     <li>Prénom: <strong>{{$clients->prenom}}</strong></li>
                     <li>Email:  <strong>{{$clients->email}}</strong></li>
                     <li>Adresse:  <strong>{{$clients->adresse}}</strong></li>
                     <li>Téléphone:  <strong>{{$clients->telephone}}</strong></li>
                     <li>Entreprise: <strong>{{$clients->entreprise}}</strong></li>
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
                          
                            

