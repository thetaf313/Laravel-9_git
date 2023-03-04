

@extends('Back.index')
@section('content')
    
<div class="content-wrapper">
    <div class="content">
<div class="row">
        <div class="col-lg-12">
        @if(session()->has('message'))
                  <div class="alert alert-icon alert-success">
                     {{session('message')}}
                  </div>
                  @endif
                  @if($errors->any())
                   @foreach($errors->All() as $error)
                   <div class="alert alert-icon alert-danger">
                     {{session('errors')}}
                  </div>
                   @endforeach
                   @endif
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('client.index')}}" class="btn btn-success" >LISTER CLIENTS</a>
             <h2><center><strong>Modifier Un Clients</strong></center></h2>
            </h5>
              
            </div>
            <div class="card-body">
              <!-- le chemin ./exe/add/submit.php est le methode=POST -->
              <form action="{{route('client.update', $clients->id)}}"  method="POST">  
               @csrf
               @method('PUT')
               
              <div class="form-group">
                <input type="text" class="form-control" value="{{$clients->nom}}" name="nom" id="exampleInputEmail1" placeholder="Nom">
              </div>

              <div class="form-group">
                <input type="text" name="prenom" class="form-control" value="{{$clients->prenom}}" id="exampleInputPassword1" placeholder="Prenom">
              </div>
      
              <div class="form-group">
                <input type="text" class="form-control" name="adresse" value="{{$clients->adresse}}"  id="exampleInputEmail1"  placeholder="Adresse">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="email" value="{{$clients->email}}"  id="exampleInputEmail1"  placeholder="Email">
              </div>

              <div class="form-group">
                <input type="number" class="form-control" name="telephone" value="{{$clients->telephone}}"  id="exampleInputEmail1"  placeholder="Téléphone">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="entreprise" value="{{$clients->entreprise}}"  id="exampleInputEmail1"  placeholder="entreprises">
              </div>

              <div class="form-group"> 
              <input type="hidden" class="form-control" value="{{$clients->id}}" name="id" id="exampleInputEmail1">
              </div>
              
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  Check me out </label>
              </div>
              <button type="submit" class="alert alert-success">Modifier</button>
          
            </form>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

@endsection

