
    @extends('Back.index')
    @section('content')
      <div class="content-wrapper">
    <div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">

              <a href="{{route('Module.index')}}" class="btn btn-success" >Lister Les Modules</a>
              <h2 ><center><strong>Ajouter Un Module</strong></center></h2>
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
               <form action="{{route('Module.store')}}"  method="POST" enctype="multipart/form-data">
               @csrf
              <div class="form-group">

                <input type="text" class="form-control" name="nom_module" id="exampleInputEmail1" placeholder="Nom module">
              </div>

              <div class="form-group">

                <input type="text" name="caption" class="form-control" id="exampleInputPassword1" placeholder="Dimunitif">
              </div>


              <div class="form-group has-feedback">
                    <label class="control-label">Details</label>
                    <textarea class="form-control" name="detail" id="placeTextarea" rows="3" placeholder="Details"></textarea>
                  </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="image" id="image">
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
