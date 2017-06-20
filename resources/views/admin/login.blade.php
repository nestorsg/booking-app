@extends('admin/layout')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading">Login al panel de Administrador</div>
        <div class="panel-body">
          @if ($errors != 'None')
            <div class="alert alert-danger">
              <strong>Usuario o contraseña erroneos</strong>
            </div>
          @endif
          
          {!! Form::open(array('url' => 'admin/login', 'class' => 'form-horizontal')) !!}
          
          <div class="form-group">
            <label for="username" class="col-lg-2 control-label">Usuario</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="username" name="username">
            </div>
          </div>
          
          <div class="form-group">
            <label for="password" class="col-lg-2 control-label">Contraseña</label>
            <div class="col-lg-8">
              <input type="password" class="form-control" id="password" name="password">
            </div>
          </div>
          
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Log in</button>
          </div>
          <br><br><br>
        </div>
      </div>
    </div>
  </div>

  </div>
  
{!! Form::close() !!}
</body>
</html>
@endsection