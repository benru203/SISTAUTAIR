@extends('Admin.Template.main')

@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario Actualizacion de Horarios</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    {!! Form::open(['route'=>'Administracion.Horario.update','method'=>'PUT','class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">
                        {!! Form::label('dia','dia',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                              {!! Form::select('dia',['lunes'=>'Lunes','martes'=>'Martes','miercoles'=>'Miercoles','jueves'=>'Jueves','viernes'=>'Viernes','Sabado'=>'Sabado','domingo'=>'Domingo'],$horario->dia,['class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Seleccione una opcion...','required'])!!}
                        </div>
                      </div>
                        <div class="form-group">
                          {!! Form::label('h_i','Hora del Inicio',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              {!! Form::time('inicio',$horario->inicio,['class'=>'form-control col-md-7 col-xs-12','required'])!!}
                              </div>
                        </div>
                        <div class="form-group">
                          {!! Form::label('h_f','Hora del Final',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              {!! Form::time('fin',$horario->fin,['class'=>'form-control col-md-7 col-xs-12','required'])!!}
                              </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Enviar</button>
                          <a class="btn btn-primary" href="{{route('Administracion.Horario.index')}}">Cancelar</a>
                        </div>
                      </div>

                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection
