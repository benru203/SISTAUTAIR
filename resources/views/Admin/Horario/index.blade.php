@extends('Admin.Template.main')

@section('contenido')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>Listado de Horarios</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                   
                                                 <tr>
                                                    <th>Id</th>
                                                    <th>Dia</th>
                                                    <th>Hora Inicio</th>
                                                    <th>Hora Fin</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($horarios as $horario)
                                                  <tr>
                                                    <td>{{$horario->id}}</td>
                                                    <td>{{$horario->dia}}</td>
                                                    <td>{{$horario->inicio}}</td>
                                                    <td>{{$horario->fin}}</td>
                                                    <td>
                                                      <a href="{{route('Administracion.Horario.destroy',$horario->id)}}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
			                                        		<span class="glyphicon glyphicon-trash"></span>
			                                        	</a>
			                                        	<a href="{{route('Administracion.Horario.edit',$horario->id)}}" onclick="return confirm('¿Seguro desea editarlo?')" class="btn btn-warning">
			                                        		<span class="glyphicon glyphicon-wrench"></span>
			                                        	</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$horarios->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
