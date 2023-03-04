

@extends('Back.index')
@section('content')
<div class="content-wrapper"> 

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('acces.index')}}" class="btn btn-success" >Liste Des Acces</a>
              <h2 ><center><strong>Details Acces</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <div class="content">

      
      <div class="info-box">
      
      <div class="table-responsive">
        
      <div>
          <strong>Groupe: {{ $access->Groupe?$access->Groupe->nom_groupe:'' }}</strong>
          <br>
          <strong>Module: {{ $access->Module?$access->Module->nom_module:'' }}</strong>
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
                          
                            

