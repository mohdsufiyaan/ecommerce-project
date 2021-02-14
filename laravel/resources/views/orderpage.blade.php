@extends('master')
@section('content')
<div class="container order-page">
  <div class="row"> <div class="col-sm-7">

<table class="table table-striped">
  <tbody>
    <tr>
      <th>Price</th>
      <td>{{$order['price']}} Rupees</td>
    </tr>
    <tr>
      <th>Tax</th>
      <td>0 Rupees</td>
    </tr>
    <tr>
      <th>Delivery Charge</th>
      <td>150 Rupees</td>
    </tr>
    <tr>
      <th>Total</th>
      <td>{{$order['price']+150}} Rupees</td>
    </tr>

  </tbody>
</table>
    </div>
    <div class="col-sm-5">
      <img src="{{$order['galary']}}" alt="" class="order-img">
    </div>
    </div>
    <div class="row">
      <div class="col-sm-4">

<form action="/orderplace" method="POST">
  @csrf()
  <div class="form-group">
    <textarea class="form-control" name="address" placeholder="write the address"></textarea>
  </div>
  <input type="hidden" name="ids" value="{{$order['id']}}">
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio" name="payment" value="Online Payment">    <span>Online Payment</span></p>
  <p><input type="radio" name="payment" value="EMI payment">   <span>EMI Payment</span></p>
  <p><input type="radio" name="payment" value="Cash">   <span>Payment on Delivery</span></p>
  </div>
  <button type="submit" class="btn btn-danger">Order Now</button>
</form>
      </div>
      <div class="col-sm-3">
        <a href="/" class="btn btn-primary">Go Back</a>
      </div>
    </div>
  </div>
  <br><br>
    @endsection