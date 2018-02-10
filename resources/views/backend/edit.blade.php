@extends('backend.home')

@section('content')

<br>
<br>

<div class="col-md-4 offset-md-4 ">
  <button type="button" class="close" aria-label="Close">
  <a href="/home">
  <span aria-hidden="true">&times;</span>
  </a>
</button>

	<p class="h3">Uredi proizvod:</p>
	<hr>
	<form method="POST" enctype="multipart/form-data">

   {{ csrf_field() }}

   <input name="_method" type="hidden" value="PATCH">


	<div class="form-group">

      <label for="usr">Naziv proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="name" value="{{$product->name}}" required>

      @if ($errors->has('name'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('name') }}
        </div>
      @endif

	</div>

	<div class="form-group">
      
    	<label for="exampleFormControlFile1">Slika proizvoda:</label>
    	<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{$product->image}}">

       @if ($errors->has('image'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('image') }}
        </div>
      @endif

    </div>

	<div class="form-group">

    	<label for="usr">Cijena proizvoda:</label>
  		<input type="text" class="form-control" id="usr" name="price" value="{{$product->price}}" required>

      @if ($errors->has('price'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('price') }}
        </div>
      @endif

	</div>

	<div class="form-group">

  		<label for="comment">Opis proizvoda:</label>
  		<textarea class="form-control" rows="5" id="comment" name="description" required>{{$product->description}}</textarea>

      @if ($errors->has('description'))
        <div class="alert alert-danger" role="alert">
          {{ $errors->first('description') }}
        </div>
      @endif

	</div>

	<div class="form-group">
      
  		<label for="sel1">Vrsta proizvoda:</label>
  		<select class="form-control" id="sel1" name="category" value="{{$product->category}}" required>

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

	<button type="submit" class="btn btn-secondary btn-block btn-lg">Uredi proizvod</button>

	</form>

<div>

@endsection