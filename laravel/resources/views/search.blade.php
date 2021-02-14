@extends('master')
@section('content')
<div class="container">
  <div class="">
    <h1><b>Search Product</b></h1>

    <div class="">
      @foreach($search as $item)
      <div class="row">
        <div class="item-search">
          <a href="detail/{{$item['id']}}">
            <div class="col-sm-4"><img src="{{$item['galary']}}" class="img-search" ></div>
            <div class="col-sm-6">
              <h1> <b> Name </b>: {{$item['name']}} {{$item['catagroy']}}</h1>
              <!--<h2><b>Price </b>: {{$item['price']}}</h2>
              <h3><b>Catagory </b>: {{$item['catagroy']}}</h3>-->
              <h2><b>Description </b>: {{$item['description']}}</h2>
            </div>
          </a>
        </div></div>
        <br><br><br>
        @endforeach
      </div>
    </div></div>
    @endsection