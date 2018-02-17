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

        <a class="btn btn-secondary btn-sm" href="/home/poruke" role="button">
          <i class="fas fa-envelope"></i> Poruke
        </a>

        <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <input class="btn btn-secondary btn-sm" type="submit" name="logout" value="Logout"> 
        </form>                               
    </nav>
   
      @yield('content')                              
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>

</html>