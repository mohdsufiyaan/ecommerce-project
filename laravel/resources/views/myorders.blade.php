@extends('master')
@section('content')
<div class="container">
  <div class="">
    <h1><b>My Orders List</b></h1>
    <!--<a href="#" class="btn btn-primary filter-btn"><h4>Filter</h4></a>-->
    <div class="">
      @foreach($oders as $item)
      <div class="row">
        <div class="item-search">

            <div class="col-sm-4"><img src="{{$item->galary}}" class="img-search" ></div><hr>
            <div class="col-sm-6">
              <h1> <b> Name </b>: {{$item->name}} {{$item->catagroy}}</h1>

              <h2><b>Order Date </b>: {{$item->order_date}}</h2>
              <h3><b>Status </b>: {{$item->status}}</h3>

              <h2><b>Description </b>: {{$item->description}}</h2>
              <br><br>
             <!-- <a href="deleteorder/{{$item->id}}" class="btn btn-danger">Delete From My Order List</a>-->
          &nbsp &nbsp
              <a href="/" class="btn btn-primary">Go Back</a>
              &nbsp &nbsp

              <hr>
            </div>

        </div></div>
        <br><br><br>
        @endforeach
      </div>
    </div></div>
    @endsection