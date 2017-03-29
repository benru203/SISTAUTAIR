<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Inicio de Sesion</h3>
    </div>
    <div class="panel-body">
        {!! Form::open(['route'=>'auth.login','method'=>'POST']) !!}
            <fieldset>
                <div class="form-group">
                    {!! Form::label('email','Correo Electronico') !!}
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@mail.com']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Correo Electronico') !!}
                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'contraseña']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Iniciar Sesion',['class'=>'btn btn-lg btn-success btn-block']) !!}
                </div>
                <!-- Change this to a button or input when using this as a form -->
            </fieldset>
        {!! Form::close() !!}
    </div>
</div>
