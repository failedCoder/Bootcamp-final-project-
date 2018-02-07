@extends('backend.home')

@section('content')
<br>
<br>

<div class="col-md-4 offset-md-4 ">

  @if ($flash=session('message'))
    <div class="alert alert-success" role="alert">
      {{ $flash }}
    </div>    
  @endif

	<form method="POST" action="/home/dodaj" enctype="multipart/form-data">
   {{ csrf_field() }}
	<div class="form-group">
    	<label for="usr">Naziv proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="name" required>
	</div>
	<div class="form-group">
    	<label for="exampleFormControlFile1">Slika proizvoda:</label>
    	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div>
	<div class="form-group">
    	<label for="usr">Cijena proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="price" required>
	</div>
	<div class="form-group">
  		<label for="comment">Opis proizvoda:</label>
  		<textarea class="form-control" rows="5" id="comment" name="description" required></textarea>
	</div>
	<div class="form-group">
  		<label for="sel1">Vrsta proizvoda:</label>
  		<select class="form-control" id="sel1" name="category" required>
        @foreach($categories as $category)
    		<option>{{ $category }}</option>
    		@endforeach
  		</select>
	</div>
	<br>

	<button type="submit" class="btn btn-secondary btn-block btn-lg">Dodaj proizvod</button>

	</form>
<div>
@endsection