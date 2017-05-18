@extends('Admin.Template.main')

@section('contenido')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>Listado de Bloques</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Numero de Aulas</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($bloques as $bloque)
                                                  <tr>
                                                    <th>{{$bloque->id}}</th>
                                                    <td>{{$bloque->nombre}}</td>
                                                    <td>{{$bloque->num_aulas}}</td>
                                                    <td>
                                                      <a href="{{route('Administracion.Bloque.destroy',$bloque->id)}}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
			                                        		<span class="glyphicon glyphicon-trash"></span>
			                                        	</a>
			                                        	<a href="{{route('Administracion.Bloque.edit',$bloque->id)}}" onclick="return confirm('¿Seguro desea editarlo?')" class="btn btn-warning">
			                                        		<span class="glyphicon glyphicon-wrench"></span>
			                                        	</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$bloques->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
