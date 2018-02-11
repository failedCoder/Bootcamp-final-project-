<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Utopija</title>
    
    <link href="/css/home.css" rel="stylesheet">



  </head>
  

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/login">Login</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Utopija</h1>
        <p class="lead">Genericka pozdravna poruka,opis stranice,ponude il tak nesto slicno bla bla bla bla</p>

        @include('frontend.partials.carousel')

        <p class="lead">
          <a href="/ponuda" class="btn btn-lg btn-secondary">Pogledajte ponudu</a>
        </p>
        <p class="lead">
          <a href="/kontakt" class="btn btn-lg btn-secondary">Kontaktirajte nas</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        </div>
      </footer>
    </div>

  </body>
</html>
