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
                    {!! Form::open(['route'=>'Administracion.Aula.update','method'=>'PUT','class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">
                        {!! Form::label('nombre','Nombre',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nombre',$aula->nombre,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Nombre del Aula','required']) !!}
                        </div>
                      </div>
                        <div class="form-group">
                          {!! Form::label('bloque_id','Bloque',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('bloque_id',$bloques,$aula->bloque_id,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Seleccione un Bloque','required']) !!}
                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Actualizar</button>
                          <a class="btn btn-primary" href="{{route('Administracion.Aula.index')}}">Cancelar</a>
                        </div>
                      </div>

                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection
