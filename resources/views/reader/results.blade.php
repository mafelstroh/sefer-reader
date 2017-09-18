@include('main/head-bootstrap')
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @yield('headbootstrap')
  </head>
  <body>
    <!--Bootstrap basic boilerplate -->
    @include('main/body-bootstrap')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">@mafelstroh</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">EMPTY</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="http://manuelfelipe.io/">About me</a>
              </li>
        </div>
    </nav>
    <br />
    <div class="container">
        @include('reader.table')
        @yield('mainresults')
    </div>
    <!-- Scripts -->
    @yield('bodybootstrap')
  </body>
</html>
