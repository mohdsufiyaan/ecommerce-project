@extends('master')
@section('content')
<div class="container custem-login">
  <div class="qq">
	<div class="row">

		<div class="col-sm-9 col-sm-offset-2">

			<form action="login" method="POST">

  <div class="form-group">
    @csrf()
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Password" name="password">
  </div>



  <span><button type="submit" class="btn btn-primary">Login</button>
</form>
&nbsp &nbsp
<a href="/register" class="btn btn-primary">Resgistration</a></span>
		</div>
	</div></div>
</div>
@endsection