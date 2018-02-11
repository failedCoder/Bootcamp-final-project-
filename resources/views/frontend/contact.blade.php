@extends('frontend.master')

@section('content')
<br>


<div class="col-md-4 offset-md-4 ">

<button type="button" class="close" aria-label="Close">
  <a href="/">
  <span aria-hidden="true">&times;</span>
  </a>
</button>
  
  <p class="h3">Pošaljite nam poruku:</p>
  <hr>

	<form method="POST" action="/pošalji" enctype="multipart/form-data">

   {{ csrf_field() }}


	<div class="form-group">

      <label for="usr">Ime:</label>
  		<input type="text" class="form-control" id="usr" name="name" required>

      @if ($errors->has('name'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('name') }}
        </div>
      @endif

	</div>


	<div class="form-group">

    	<label for="usr">Email:</label>
  		<input type="email" class="form-control" id="usr" name="email" required>

      @if ($errors->has('price'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('price') }}
        </div>
      @endif

	</div>

	<div class="form-group">

  		<label for="comment">Poruka:</label>
  		<textarea class="form-control" rows="5" id="comment" name="message" required></textarea>

      @if ($errors->has('description'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('description') }}
        </div>
      @endif

	</div>

	
	<br>

	<button type="submit" class="btn btn-secondary btn-block btn-lg">Pošalji</button>

	</form>

<div>
@endsection