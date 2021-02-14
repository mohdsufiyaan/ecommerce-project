@extends('master')
@section('content')


<div class="container detail-container">
<div class="row">
  <div class="col-sm-6">
    <img src="{{$product['galary']}}" class="detail-img" alt="">
  </div>
  <div class="col-sm-6">
    <h1> <b> Name </b>: {{$product['name']}} {{$product['catagroy']}}</h1>
    <h2><b>Price </b>: {{$product['price']}}</h2>
    <h3><b>Catagory </b>: {{$product['catagroy']}}</h3>
    <h3><b>Description </b>: {{$product['description']}}</h3>
    <br><br>
    <a href="/" class="btn btn-primary ">Go Back</a>&nbsp &nbsp &nbsp<br><br>
    @if(Session::has('user'))

    <form action="/add-to-card" method="POST">
      @csrf()
      <input type="hidden" name="product_id" value="{{$product['id']}}">
      <button class="btn btn-success card-btn ">Add To Card</button>
    </form><br>
    <a href="/ordercard/{{$product['id']}}" class="btn btn-danger ">Buy Now</a>
    @else

    <form action="/login" method="GET">
      @csrf()
      <input type="hidden" name="product_id" value="{{$product['id']}}">
      <button class="btn btn-success card-btn ">Add To Card</button>
    </form><br>
    <a href="/login" class="btn btn-danger ">Buy Now</a>
    @endif

  </div>
</div>


</div>
@endsection