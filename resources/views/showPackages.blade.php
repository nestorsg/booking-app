@extends('layout')
@section('content')
  <div class="container">
    <div class="row">
      <legend>Espacios</legend>
      <table class="table table-striped table-hover">
        <thead>
        <tr>
          <th>Edificio</th>
          <th>Nombre de Espacio</th>
          <th>Tipo de Espacio</th>
          <th>Capacidad</th>
          <th>Precio</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($packages as $p)
          <tr>
            <td>{{ $p->Edificio }}</td>
            <td>{{ $p->NombreEspacio }}</td>
            <td>{{ $p->TipoEspacio }}</td>
            <td>{{ $p->Capacidad }}</td>
            <td>{{ $p->Precio.' Euros' }}</td>
            <td><a href="booking/calendar/{{ $p->NombreEspacio }}" class="btn btn-primary">Buscar fecha</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
