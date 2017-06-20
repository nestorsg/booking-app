@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Bienvenido/a
                        @if (auth()->check())
                            <strong>
                                {{ auth()->user()->name }}
                            </strong>
                        @endif
                    </div>

                    <div class="panel-body">
                        En esta aplicación podrá comprobar la disponibilidad de los diferentes espacios con los que cuenta la Facutlad de Economía Empresa y Turismo para la reserva de los mismos.
                        @if (auth()->guest())

                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection