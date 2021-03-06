<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='{{ asset('css/app.css') }}'>
    <title>@yield('title')</title>

  </head>
  <body>
    <div class='container-background'>
    <div class='banner-container'>
        <img src="/images/banner.png" class="img-fluid" alt="Banner">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('speakers') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/speakers') }}">Speakers</a>
            </li>
            <li class="nav-item {{ Request::is('presenting-companies') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/presenting-companies') }}">Presenters</a>
            </li>
            <li class="nav-item {{ Request::is('supporting-organisations') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/supporting-organisations') }}">Sponsors & Supporters</a>
            </li>
            <li class="nav-item {{ Request::is('timetable') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/timetable') }}">Agenda</a>
            </li>
            <li class='nav-item {{ Request::is('presentingtimetable') ? 'active' : '' }}'>
                <a class='nav-link' href='{{ url('/pr-timetable') }}'>Presenter Agenda</a>
            </li>
            <li class="nav-item {{ Request::is('organisers') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/organisers') }}">About Sachs</a>
            </li>
        </ul>
    </div>
    </nav>
    <div class='container main-content'>
        @yield('content')
    </div>
        
    @component('layouts.footer')
    @endcomponent

    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>