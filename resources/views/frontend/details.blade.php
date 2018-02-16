@extends('frontend.master')

@section('content')

<div class="album py-5 bg-light ">
        <div class="container ">
		  <div class="row">
		  
		  	
            <div class="col-md-5 mx-auto">
            		
              <div class="card mb-4 box-shadow" >
              	<a class="text-secondary ml-auto" href="/ponuda">
		  			<i class="fas fa-caret-square-left"></i> Nazad
		  		</a>
                <img class="card-img-top" src="/storage/{{$product->image}}" alt="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fredeem.tokenly.com%2Fimages%2Fcatalog_default.gif&f=1" style=" width:100%; height: 250px !important;">
                <div class="card-body">
                  	
                  <ul class="list-group list-group-flush">
                  	<li class="list-group-item text-center"><h5 class="card-title">Naziv: {{$product->name}}</h5></li>
                  	<li class="list-group-item text-center"><strong>Opis:</strong> {{$product->description}}</li>
                  	<li class="list-group-item text-center"><strong>Kategorija:</strong> {{$product->category}}</li>
                  	<li class="list-group-item text-center"><strong>Cijena:</strong> {{$product->price}} kn</li>

                  	
  				  </ul>
  				  <br>
                  <div class="d-flex justify-content-center align-items-center ">
                      <a href="/kontakt/{{$product->id}}" class="btn  btn-outline-secondary" role="button">Kontakt</a>
                    </div>
                    <a class="text-secondary float-right" href="/ponuda">
		  			<i class="fas fa-caret-square-left"></i> Nazad
		  		</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

@endsection