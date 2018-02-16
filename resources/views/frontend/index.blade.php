@extends('frontend.master')

@section('content')




 <div class="album py-5 bg-light">
        <div class="container">
		  <div class="row">

		  	@foreach($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow" style=" width:%; height: 382px !important; ">
                <img class="card-img-top" src="storage/{{$product->image}}" alt="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fredeem.tokenly.com%2Fimages%2Fcatalog_default.gif&f=1" style=" width:100%; height: 200px !important;">
                <div class="card-body">
                  	
                  <ul class="list-group list-group-flush">
                  	<li class="list-group-item text-center"><h5 class="card-title">{{$product->name}}</h5></li>

                  	
  				  </ul>
  				  <br>
                  <div class="d-flex justify-content-center align-items-center ">
                    <div class="btn-group ">
                      <a href="/ponuda/{{$product->id}}" class="btn btn-sm btn-outline-secondary" role="button">Detalji</a>
                      <a href="/kontakt/{{$product->id}}" class="btn btn-sm btn-outline-secondary" role="button">Kontakt</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>


@endsection

