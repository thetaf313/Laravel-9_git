

@extends('Back.index')
@section('content')
<div class="content-wrapper"> 

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('groupe.index')}}" class="btn btn-success" >Liste Des Groupes</a>
              <h2 ><center><strong>Details groupe</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <div class="content">

      
      <div class="info-box">
      
      <div class="table-responsive">
                    <ul>
                     <li>Nom groupe: <strong> {{$groupes->nom_groupe}}</strong></li>
                     <li>Dimunitif: <strong>{{$groupes->dimunitif}}</strong></li>
                     <li>Détails:  <strong>{{$groupes->detail}}</strong></li>
                    
                    
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
                          
                            

