

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
              <h5 class="text-white m-b-0"><a href="{{route('groupe.index')}}" class="btn btn-success" >LISTER Groupes</a>
             <h2 ><center><strong>Modifier Un Groupe</strong></center></h2>
            </h5>
              
            </div>
            <div class="card-body">
              <!-- le chemin ./exe/add/submit.php est le methode=POST -->
               <form action="{{route('groupe.update',$groupe->id)}}"  method="POST">  
               <input type="hidden" class="form-control" value="{{$groupe->id}}" name="id" id="exampleInputEmail1" placeholder="Nom">
             
               @csrf
               @method('PUT')
               
               <div class="form-group">
           
           <input type="text" class="form-control" value="{{$groupe->nom_groupe}}" name="nom_groupe" id="exampleInputEmail1" placeholder="Nom">
         </div>

         <div class="form-group">
    
           <input type="text" name="caption" class="form-control" value="{{$groupe->dimunitif}}" id="exampleInputPassword1" placeholder="Prenom">
         </div>
      
       

         <div class="form-group has-feedback">
                    <label class="control-label">Details</label>
                    <textarea class="form-control" name="detail" id="placeTextarea" rows="3" placeholder="Details"></textarea>
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

