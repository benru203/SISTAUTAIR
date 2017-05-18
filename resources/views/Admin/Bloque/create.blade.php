@extends('Admin.Template.main')

@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario Registro Bloque</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    {!! Form::open(['route'=>'Administracion.Bloque.store','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">
                        {!! Form::label('nombre','Nombre',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nombre',null,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Nombre del Bloque','required']) !!}
                        </div>
                      </div>
                        <div class="form-group">
                          {!! Form::label('num_aula','Numero de Aulas',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('num_aulas','0',['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'ejemplo@ejemplo.com','required']) !!}
                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Enviar</button>
                          <a class="btn btn-primary" href="{{route('Administracion.Bloque.index')}}">Cancelar</a>
                        </div>
                      </div>

                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection
