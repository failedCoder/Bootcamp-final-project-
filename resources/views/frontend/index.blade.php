@extends('frontend.master')

@section('content')

@foreach($products as $product)
<!--<img src="{{asset('storage/app/public/' .$product->image)}}">-->
<img src="storage/{{$product->image}}">
<br>
@endforeach

@endsection

