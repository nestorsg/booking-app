@extends('layout')
@section('content')
<?php $link = Request::root(); ?>
<div class="row jumbotron text-center">
  <h1>Seleccione el día que desea</h1>
  <p>Ha elegido el aula <b> {{ $packageName }} </b></p>
  <p id="currentDate">  </p>
</div>

<div class="col-md-11 text-center">
  <div class="col-md-offset-4 col-lg-offset-5 col-md-2 col-lg-1">
    <div id="calendar"></div>
  </div>
  <div class="col-md-offset-1 col-lg-offset-1 col-md-2 col-lg-1">
    <div class="panel panel-primary">
      <div class="panel-heading" id="daySelect">
        Seleccione el día
      </div>
      <div class="panel-body">
        <p id="dayTimes"></p>
      </div>
    </div>
  </div>
</div>

<!-- Calendar Functionality -->
<script src="{{ asset('/js/calendar.js') }}"></script>
@endsection

