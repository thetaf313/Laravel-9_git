
    @extends('Back.index')
    @section('content')
      <div class="content-wrapper">
    <div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">
         
              <a href="{{route('client.index')}}" class="btn btn-success" >Lister Les Clients</a>
              <h2 ><center><strong>Ajouter Un Clients</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
              <!-- le chemin ./exe/add/submit.php est la methode=POST -->
              <div class="row">
                <div class="col-md-12">
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
                </div>
              </div>
               <form action="{{route('client.store')}}"  method="POST" enctype="multipart/form-data">  
               @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="nom" id="exampleInputEmail1" placeholder="Nom">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" placeholder="Prenom">
              </div>
           
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="telephone" id="exampleInputEmail1"  placeholder="Téléphone">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="adresse" id="exampleInputEmail1"  placeholder="Adresse">
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="entreprise" id="exampleInputEmail1"  placeholder="Entreprise">
              </div>
            
             
           
              
                
            
              
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  Check me out </label>
              </div>
              <button type="submit" class="alert alert-success">Envoyer</button>
              <button type="reset" class="alert alert-danger">Effacer</button>
            </form>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

@endsection