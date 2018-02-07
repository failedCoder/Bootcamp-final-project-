<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>


<body>
    <nav class="navbar navbar-dark bg-secondary">
        <a class="navbar-brand" href="/home">Utopija</a>
        
        <a class="nav-link btn btn-outline-light btn-sm" href="/home/dodaj">Dodaj</a>
        <a class="nav-link btn btn-outline-light btn-sm" href="/home/uredi">Uredi</a>
        <a class="nav-link btn btn-outline-light btn-sm" href="/home/obriši">Obriši</a>
        
        <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <!--<input type="submit" name="logout" value="Logout"> -->
            
            <input class="btn btn-secondary btn-sm" type="submit" name="logout" value="Logout">
        </form>                               
    </nav>
   
      @yield('content')                              

</body>

</html>