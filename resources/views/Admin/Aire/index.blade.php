@extends('Admin.Template.main')

@section('contenido')
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>Listado de Aires</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id</th>
                                                    <th>Descripcion</th>
                                                    <th>Aula</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($aires as $aire)
                                                  <tr>
                                                    <th>{{$aire->id}}</th>
                                                    <td>{{$aire->descripcion}}</td>
                                                    <td>{{$aire->aula->nombre}}</td>
                                                    <td>{{$aire->estado}}</td>
                                                    <td>
                                                      <a href="{{route('Administracion.Aire.destroy',$aire->id)}}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
			                                        		<span class="glyphicon glyphicon-trash"></span>
			                                        	</a>
			                                        	<a href="{{route('Administracion.Aire.edit',$aire->id)}}" onclick="return confirm('¿Seguro desea editarlo?')" class="btn btn-warning">
			                                        		<span class="glyphicon glyphicon-wrench"></span>
			                                        	</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$aires->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
