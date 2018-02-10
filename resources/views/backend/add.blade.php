@extends('backend.home')

@section('content')
<br>


<div class="col-md-4 offset-md-4 ">

<button type="button" class="close" aria-label="Close">
  <a href="/home">
  <span aria-hidden="true">&times;</span>
  </a>
</button>
  
  <p class="h3">Dodaj proizvod:</p>
  <hr>

	<form method="POST" action="/home/dodaj" enctype="multipart/form-data">

   {{ csrf_field() }}


	<div class="form-group">

      <label for="usr">Naziv proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="name" required>

      @if ($errors->has('name'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('name') }}
        </div>
      @endif

	</div>

	<div class="form-group">
      
    	<label for="exampleFormControlFile1">Slika proizvoda:</label>
    	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

       @if ($errors->has('image'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('image') }}
        </div>
      @endif

    </div>

	<div class="form-group">

    	<label for="usr">Cijena proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="price" required>

      @if ($errors->has('price'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('price') }}
        </div>
      @endif

	</div>

	<div class="form-group">

  		<label for="comment">Opis proizvoda:</label>
  		<textarea class="form-control" rows="5" id="comment" name="description" required></textarea>

      @if ($errors->has('description'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('description') }}
        </div>
      @endif

	</div>

	<div class="form-group">
      
  		<label for="sel1">Vrsta proizvoda:</label>
  		<select class="form-control" id="sel1" name="category" required>

        @foreach($categories as $category)
    		<option>{{ $category }}</option>
    		@endforeach

  		</select>

      @if ($errors->has('category'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('category') }}
        </div>
      @endif
	</div>
	<br>

	<button type="submit" class="btn btn-secondary btn-block btn-lg">Dodaj proizvod</button>

	</form>

<div>

  
@endsection