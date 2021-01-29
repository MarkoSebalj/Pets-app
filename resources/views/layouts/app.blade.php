<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PETS APP</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Pets app</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('pets.index') }}">Pets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('countries.index') }}">Countries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('calendars.index') }}">Calendars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('pet_types.index') }}">Pet Types</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('medical_conditions.index') }}">Medical Conditions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('veterinarian_visits.index') }}">Veterinarian Visits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('allergies.index') }}">Allergies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('images.index') }}">Images</a>
      </li>
      </ul>
      @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="nav-user" role="button" data-toggle="dropdown">
                Welcome {{ $currentUser->first_name }}<small> ({{ $currentUser->role->name }})</small>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('users.show', ['user' => $currentUser->id]) }}">My profile</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </div>
            </li>
        </ul>
        @endauth

        
    </div>
    </nav>

    <div class="container">

        <!-- @if (session('success'))
            <div class="alert alert-success mt-5">
                {{ session('success') }}
            </div>
        @endif -->

        
    </div>

    <div class="container">
    @yield('content')
    </div>

    <style>
        /* temporarily here */
        body { padding-bottom: 10vh; }
        footer {
            left: 0;
            bottom: 0;
            height: 8vh;
            z-index: 100;
        }
    </style>

    <script>
        /* temporarily here */
        function areYouSure(ev) {
            if(confirm('Are you sure you?')){
                return true;
            }
            ev.preventDefault();
            return false;
        }
    </script>
    <footer class="bg-light w-100 text-center position-fixed pt-3">
        <small>Powered by <a href="https://www.google.com/search?q=zapravo prevara" target="_blank">Nije prevara d.o.o.</a></small>
    </footer>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

 