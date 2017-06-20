<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserva de espacios</title>

  <!-- Linking CSS -->


  <!-- Style -->

  <!-- Latest compiled and minified CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="{{ asset('/css/paper.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/core.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
  
  <!-- Datepicker css -->
  <link href="{{ asset('/css/calendar.css') }}" rel="stylesheet">

  <!-- Modernizr -->
  <script src="{{ asset('/js/vendor/modernizr.js') }}"></script>

  <!-- JQuery must be in the header for the calendar to work, I don't know why... -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

  <!-- Latest compiled and minified JavaScript Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

  <!-- Moment -->
  <script src="{{ asset('/js/moment.js') }}"></script>

</head>  
<body>
  <div id="url" style="display: none">{{url('')}}</div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Gestión de reservas</a>
      </div>

      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('Espacios') }}">Espacios disponibles</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/') }}">Ver reservas realizadas</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.5.2/jquery.timeago.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script>
      $(function() {
          window.App = {

              init: function() {
                  this.timeago();
                  this.summernote();
              },

              timeago: function() {
                  $("time").timeago();
              },

              summernote: function() {
                  $('textarea').summernote();
              }

          };

          App.init()
      });


  </script>
</body>
</html>
