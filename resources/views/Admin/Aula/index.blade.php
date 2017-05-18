@extends('Admin.Template.main')

@section('contenido')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>Listado de Aulas</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id</th>
                                                    <th>Nombre Aula</th>
                                                    <th>Bloque</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($aulas as $aula)
                                                  <tr>
                                                    <th>{{$aula->id}}</th>
                                                    <td>{{$aula->nombre}}</td>
                                                    <td>{{$aula->bloque->nombre}}</td>
                                                    <td>
                                                      <a href="{{route('Administracion.Aula.destroy',$aula->id)}}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
			                                        		<span class="glyphicon glyphicon-trash"></span>
			                                        	</a>
			                                        	<a href="{{route('Administracion.Aula.edit',$aula->id)}}" onclick="return confirm('¿Seguro desea editarlo?')" class="btn btn-warning">
			                                        		<span class="glyphicon glyphicon-wrench"></span>
			                                        	</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$aulas->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
