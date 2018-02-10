@extends('backend.home')

@section('content')

<br>

<div class="row">
	<div class="col-md-4 offset-md-4">

		<a class="btn btn-secondary btn-block btn-lg" href="home/dodaj" role="button">Dodaj proizvod</a>
  
    </div>

 </div>

 <br>

<ul class="list-group">

 		
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Naziv</th>
      <th scope="col">Cijena(kn)</th>
      <th scope="col">Opis</th>
      <th scope="col">Kategorija</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($products as $product)
    <tr>
      <th scope="row" class="align-middle">{{ $product->name }}</th>
      <td class="align-middle">{{ $product->price }} kn</td>
      <td class="align-middle">{{ $product->description }}</td>
      <td class="align-middle">{{ $product->category }}</td>
      <td class="align-middle">
      	<a class="btn btn-outline-warning" href="home/uredi/{{$product->id}}" role="button">Uredi proizvod</a>
      </td>
      <td class="align-middle">
      	<a class="btn btn-outline-danger" href="home/obriši/{{$product->id}}" role="button">Obriši proizvod</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</ul>

@endsection