<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

	<title>Utopija</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/app.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



</head>


<body>

	  <nav class="navbar navbar-dark bg-secondary ">
	
	  	
       
        <a class="btn btn-secondary btn-sm  mr-auto" href="/ponuda" role="button">Ponuda <i class="fas fa-arrow-alt-circle-right"></i>
       </a>
   <a class="navbar-brand align-middle mx-auto  " href="/">Utopija</a>
		<a class="btn btn-secondary btn-sm  ml-auto " href="/kontakt" role="button">Kontaktirajte nas <i class="far fa-envelope"></i></a>	
      	                      
      </nav>

	@yield('content')

</body>

</html>