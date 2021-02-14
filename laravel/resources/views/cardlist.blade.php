@extends('master')
@section('content')
<div class="container">
  <div class="">
    <h1><b>Cart Product</b></h1>
    <!--<a href="#" class="btn btn-primary filter-btn"><h4>Filter</h4></a>-->
    <div class="">
      @foreach($list as $item)
      <div class="row">
        <div class="item-search">
          <a href="detail/{{$item->id}}">
            <div class="col-sm-4"><img src="{{$item->galary}}" class="img-search" ></div><hr>
            <div class="col-sm-6">
              <h1> <b> Name </b>: {{$item->name}} {{$item->catagroy}}</h1>
              <!--<h2><b>Price </b>: {{$item->price}}</h2>
              <h3><b>Catagory </b>: {{$item->catagroy}}</h3>-->
              <h2><b>Description </b>: {{$item->description}}</h2>
              <br><br>
              <a href="deletecart/{{$item->id}}" class="btn btn-danger">Delete From Cart</a>
          &nbsp &nbsp
              <a href="/" class="btn btn-primary">Go Back</a>
              &nbsp &nbsp
              <a href="ordercard/{{$item->card_id}}" class="btn btn-primary">Buy Now</a>
              <hr>
            </div>
          </a>
        </div></div>
        <br><br><br>
        @endforeach
      </div>
    </div></div>
    @endsection