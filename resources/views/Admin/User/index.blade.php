@extends('Admin.Template.main')

@section('contenido')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>Listado de Usuarios</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id</th>
                                                    <th>nombre</th>
                                                    <th>Email</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $user)
                                                  <tr>
                                                    <th>{{$user->id}}</th>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>@if($user->tipo=="admin")
                                                      <span class="label label-primary">{{$user->tipo}}</span>
                                                      @else
                                                      <span class="label label-success">{{$user->tipo}}</span>
                                                      @endif
                                                    </td>
                                                    <td>
                                                      <a href="{{route('Administracion.Usuario.destroy',$user->id)}}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
			                                        		<span class="glyphicon glyphicon-trash"></span>
			                                        	</a>
			                                        	<a href="{{route('Administracion.Usuario.edit',$user->id)}}" onclick="return confirm('¿Seguro desea editarlo?')" class="btn btn-warning">
			                                        		<span class="glyphicon glyphicon-wrench"></span>
			                                        	</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$users->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
