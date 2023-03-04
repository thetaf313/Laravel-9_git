@extends('Back.index')
@section('content')



<div class="content-wrapper">

<div class="content">
<div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0"><a href="{{route('Module.create')}}" class="btn btn-success" >Ajouter Module</a>
              <h2 ><center><strong>Liste Des Modules</strong></center></h2>
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
                  <div> </div>
                @endif
                <tr>
                @if(session()->has('message'))
                  <div class="alert alert-icon alert-success">
                     {{session('message')}}
                  </div>
                @endif
                    <th>Module</th>
                    <th>Dimunitif</th>
                    <th>Details</th>
                    <th>URL</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach($modules as $module)
                  <tr>
                    <td>{{$module->nom_module}}</td>
                    <td>{{$module->dimunitif}}</td>
                    <td>{{$module->detail}}</td>
                    <td>{{$module->url}}</td>
                    <td>{{$module->image}}</td>



                      <td><a href="{{route('Module.show',$module->id)}}" class="btn btn-success"> <i class="fa fa-eye"></i></a>

                        <a href="{{route('Module.edit',$module->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                         @if ($module->etat==0)
                        <a href="{{route('Module.state',$module->id)}}" id="{{ $module->id }}" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                        @elseif ($module->etat==1)
                        <a href="{{route('Module.state',$module->id)}}" id="{{ $module->id }}" class="btn btn-success"><i class="fa fa-thumbs-down"></i></a>
                        @endif
                      <form id="destroy{{$module->id}}" action="{{route('Module.destroy',$module->id)}}" method="POST" class="btn btn-danger"
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
