@extends('Back.index')
@section('content')



<div class="content-wrapper">

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('client.create')}}" class="btn btn-success" >Ajouter Clients</a>
              <h2 ><center><strong>Liste Des Clients</strong></center></h2>
            </h5>
            </div>
            <div class="card-body">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <div class="content">


      <div class="info-box">
      <h4 class="text-black">Data Table</h4>
      <p>Data Table With Full Features</p>

                  <table id="example1" class="table table-bordered table-striped">
                  <tbody>
                <thead>
                @if(session()->has('successDelete'))
                  <div></div>
                @endif
                <tr>
                @if(session()->has('message'))
                  <div class="alert alert-icon alert-success">
                     {{session('message')}}
                  </div>
                @endif

                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach ($clients as $client)

                     <tr>
                         <td>{{$client->nom}}</td>
                         <td>{{$client->prenom}}</td>
                         <td>{{$client->email}}</td>
                         <td>{{$client->telephone}}</td>
                         <td>{{$client->adresse}}</td>
                         <td>{{$client->entreprise}}</td>


                         <td><a href="{{route('client.show', $client->id)}}" class="btn btn-success"> <i class="fa fa-eye"></i></a>
                         <a href="{{route('client.edit', $client->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                         <form id="destroy{{$client->id}}" action="{{route('client.destroy',$client->id)}}" method="POST" class="btn btn-danger"
                         style="background:transparent ;border:solid 0px;padding:0px;">
                            @csrf
                            @method('DELETE')

                         <button onclick="return confirmer()"  class="btn btn-danger" id="delete"><i class="fa fa-trash" ></i></button>
                         </form>

                        </td>
                     </tr>
                @endforeach






                <tfoot>

                </tfoot>
                </tbody>
              </table>
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

                            <script>
                              function confirmer(){
                                if(confirm('confirmer vous la suppression'))return true;
                                else return false ;
                              }
                            </script>

@endsection
