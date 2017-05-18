@extends('Admin.Template.main')

@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario Registro Aula</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    {!! Form::open(['route'=>'Administracion.Aula.store','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">
                        {!! Form::label('nombre','Nombre',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nombre',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Nombre del Aula','required']) !!}
                        </div>
                      </div>
                        <div class="form-group">
                          {!! Form::label('bloque_id','Bloque',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('bloque_id',$bloques,null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Seleccione un Bloque','required']) !!}
                          </div>
                        </div>
                         <div class="form-group">
                          {!! Form::label('horario','Horario',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Ir</button>


                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Realizar Horario</h4>
                        </div>
                        <div class="modal-body">

                          <table class="table table-striped">
                                                <thead>

                                                  <tr>
                                                  <td>Horas</td>
                                                  @foreach($horarios as $horario)
                                                  <td>{{$horario->inicio}} - {{$horario->fin}}</td>
                                                  @endforeach</tr>
                                                </thead>
                                                <tbody>
                                                  {!! $var=""!!}
                                                @foreach($horarios as $horario)
                                                <tr>
                                                  @if($var != $horario->dia)
                                                <th>{{$horario->dia}}</th>
                                                @foreach($horarios as $dia)
                                                <td>
                                                  {!! Form::checkbox($dia->id,null, ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                                </td>
                                                {!! $var = $horario->dia !!}

                                                @endforeach
                                                </tr>
                                                @endif

                                                @endforeach

                                                </tbody>
                                              </table>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Enviar</button>
                          <a class="btn btn-primary" href="{{route('Administracion.Aula.index')}}">Cancelar</a>
                        </div>
                      </div>

                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection
