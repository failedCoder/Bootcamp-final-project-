

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  
  

  <div class="carousel-inner">
    @foreach($products as $product)
    @if($loop->first)
    <div class="carousel-item active" style=" width:100%; height: 400px !important;">
    @else
    <div class="carousel-item" style=" width:100%; height: 400px !important;">
    @endif
      <img class="d-block w-100" src="storage/{{$product->image}}" alt="https://images.duckduckgo.com/iu/?u=https%3A%2F%2Fredeem.tokenly.com%2Fimages%2Fcatalog_default.gif&f=1" style=" width:100%; height: 400px !important;">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">{{$product->name}}</h5>
      </div>
    </div>
  
    @endforeach 
 
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






