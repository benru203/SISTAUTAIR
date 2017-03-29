@extends('Admin.Template.main')

@section('contenido')
<!--              <div class="col-md-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Listado de Usuarios</h2>

                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <ul class="list-unstyled msg_list">
                                  @foreach($users as $user)
                                  <li>
                                    <a>
                                      <span class="image">
                                        <img src="/Imagenes/Usuarios/{{$user->foto}}" alt="img">
                                      </span>
                                      <span>
                                        <span>Nombre: {{$user->name}}</span>
                                      </span>
                                      <br>
                                      <span >Correo Electronico: {{$user->email}}</span>
                                      <br>
                                      <span >Tipo: @if($user->tipo=="admin")
                                        <span class="label label-primary">{{$user->tipo}}</span>
                                        @else
                                        <span class="label label-success">{{$user->tipo}}</span>
                                        </span>
                                        @endif
                                    </a>
                                    <a href="{{route('Administracion.User.edit',encrypt($user->id))}}">Actualizar</a>
                                  </li>
                                @endforeach
                                </ul>
                                {!! $users->render() !!}
                              </div>
                            </div>
                          </div>
-->
                          <div class="col-md-12 col-sm-12 col-xs-12">
                                          <div class="x_panel">
                                            <div class="x_title">
                                              <h2>listado de Usuarios</h2>
                                              <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                              <table class="table table-striped">
                                                <thead>
                                                  <tr>
                                                    <th>Id</th>
                                                    <th>Foto</th>
                                                    <th>nombre</th>
                                                    <th>Email</th>
                                                    <th>Acciones</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($users as $user)
                                                  <tr>
                                                    <th>{{$user->id}}</th>
                                                    <td>  <ul class="list-unstyled msg_list"><li><a>
                                                            <span class="image">
                                                              <img src="/Imagenes/Usuarios/{{$user->foto}}" alt="img">
                                                            </span>
                                                          </a></li></ul>
                                                    </td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>@if($user->tipo=="admin")
                                                      <span class="label label-primary">{{$user->tipo}}</span>
                                                      @else
                                                      <span class="label label-success">{{$user->tipo}}</span>
                                                      @endif
                                                    </td>
                                                    <td>acciones</td>
                                                  </tr>
                                                @endforeach
                                                </tbody>
                                              </table>
                                              {!!$users->render()!!}

                                            </div>
                                          </div>
                                        </div>

@endsection
