@extends('Admin.Template.main')

@section('contenido')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario Actualizacion Usuario</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    {!! Form::open(['route'=>['Administracion.Usuario.update',$user],'method'=>'PUT','files'=>true,'class'=>'form-horizontal form-label-left']) !!}

                      <div class="form-group">
                        {!! Form::label('name','Nombre',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('name',$user->name,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Nombre del Usuario','required']) !!}
                        </div>
                      </div>
                        <div class="form-group">
                          {!! Form::label('email','Email',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::email('email',$user->email,['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'ejemplo@ejemplo.com','required']) !!}
                          </div>
                        </div>
                        <div class="form-group">
                              {!! Form::label('tipo','Tipo',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                              <div class="col-md-6 col-sm-6 col-xs-12">
                              {!! Form::select('tipo',['operativo'=>'Operativo','admin'=>'Administrador'],$user->tipo,['class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Seleccione una opcion...','required'])!!}
                              </div>
                            </div>
                            <div class="form-group">
                              {!! Form::label('foto','Foto',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                          {!! Form::file('imagen',['class'=>'sr-only','id'=>'inputImage']) !!}
                          <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="importar Foto del Usuario">
                            <span class="fa fa-upload"></span>
                          </span>
                        </label>

                              </div>
                            </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Actualizar</button>
                          <a class="btn btn-primary" href="{{route('Administracion.Usuario.index')}}">Cancelar</a>
                        </div>
                      </div>

                      {!! Form::close() !!}
                  </div>
                </div>
              </div>
@endsection
