<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

	<title>Utopija</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/app.css" rel="stylesheet">
	



</head>


<body>

	  <nav class="navbar navbar-dark bg-secondary ">
	
	  	
       
        <a class="btn btn-secondary btn-sm  mr-auto" href="/ponuda" role="button">Ponuda <i class="fas fa-arrow-alt-circle-right"></i>
       </a>
   <a class="navbar-brand align-middle mx-auto  " href="/">Utopija</a>
		<a class="btn btn-secondary btn-sm  ml-auto " href="/kontakt" role="button">Kontaktirajte nas <i class="far fa-envelope"></i></a>	
      	                      
      </nav>
      <ul class="nav nav-tabs">
      	<li class="nav-item nav-link active" style="background-color: #D8D8D8">
      		<strong>Kategorije:</strong>
      	</li>
      	<li class="nav-item ">
    		<a class="nav-link active bg-light" href="/ponuda">Sve</a>
  		</li>
      	@foreach($categories as $category)
  		  <li class="nav-item ">
    		<a class="nav-link active bg-light" href="/ponuda/kategorija/{{$category}}">{{$category}}</a>
  		</li>
  		@endforeach
	  </ul>

	@yield('content')


	<button onclick="topFunction()" class="btn btn-outline-secondary btn-sm" 
		style="position:fixed;bottom:5px;right:5px;margin:0;padding:5px 3px;">
	  Nazad na vrh
	</button>
	<script type="text/javascript">
		function topFunction() {
    		document.body.scrollTop = 0; // For Safari
    		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}	
	</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>