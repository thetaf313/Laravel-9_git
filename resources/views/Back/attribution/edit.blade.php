
    @extends('Back.index')
    @section('content')
      <div class="content-wrapper">
    <div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">
         
              <a href="{{route('attribution.index')}}" class="btn btn-success" >Lister Les Attr</a>
              <h2 ><center><strong>Ajouter une attr</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
              <!-- le chemin ./exe/add/submit.php est le methode=POST -->
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
               <form action="{{route('attribution.update', $attribution->id)}}"  method="POST" enctype="multipart/form-data">  
               @csrf
               @method('PUT')
              <div class="form-group">
                <label for="exemleInputEmail">Utilisateur</label>
                <select class="form-control" name="user_id">
                  @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="exemleInputEmail">Groupe</label>
                <select class="form-control" name="groupe_id">
                  @foreach($groupes as $groupe)
                    <option value="{{ $groupe->id }}">{{ $groupe->nom_groupe}}</option>
                  @endforeach
                </select>
              </div>
              
              <div class="form-group">
                <input type="hidden" class="form-control" value="{{ $attribution->id }}" name="id">
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