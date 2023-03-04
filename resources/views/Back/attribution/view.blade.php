

@extends('Back.index')
@section('content')
<div class="content-wrapper"> 

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('attribution.index')}}" class="btn btn-success" >Attributions</a>
              <h2 ><center><strong>Details Attribution</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <div class="content">

      
      <div class="info-box">
      
      <div class="table-responsive">

        <div>
          <strong>Groupe: {{ $attributions->Groupe?$attributions->Groupe->nom_groupe:'' }}</strong>
          <br>
          <strong>Utilisateur: {{ $attributions->User?$attributions->User->name:'' }}</strong>
          <br>
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
                            </div>

@endsection
                          
                            

