@extends('admin/layout')
@section('content')

<div class="container">
	<div class="row text-center">
		<legend>Edit Package</legend>
		  {!! Form::model($package, array('route' => array('package.update', $package->id))) !!}

        <!-- name -->
        {!! Form::label('NombreEspacio', 'Nombre del espacio') !!}
        {!! Form::text('NombreEspacio') !!}
        <br>
        {!! Form::label('TipoEspacio', 'Tipo de Espacio') !!}
        {!! Form::text('TipoEspacio') !!}
        <br>
        <!-- price -->
        {!! Form::label('Precio', 'Precio') !!}
        {!! Form::number('Precio') !!}

		<br>
        {!! Form::button('Actualizar datos', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
	</div>
</div>
@endsection