<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-comm porject</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  {{ View::make('header')}}
 @yield('content')
{{ View::make('footer')}}
</body>

<style>
	.custem-login{
		height: 500px;
		width: 100%;
		padding-top: 70px;
		background-image: url('/image/sufi.jpg');
background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  top : -20px;

	}

	.qq{
		background-color: white;
		width: 29%;
		height: 300px;
		padding-top: 16px;
		border-radius: 10px;
		opacity: 1;

		box-shadow: 6px 6px 17px 4px lightblue;
		transition-duration: 0.5s;

	}
.qq:hover{
	transform:  scale(1.1, 1.1);
}
 img.img-custem{
 	height: 250px !important;
 }
 .custem-container{
 	height: 470px;
 	position: relative;
 	top : -20px;
 }
 .slider-text{
 	background-color: #24465454 !important;
 }
 .img-tranding{
height: 100px;
 }
 .tranding{
 	margin: 20px;
 }
 .item-tranding{
 	float : left;
 	width: 270px;
 }
 .detail-img{
 	height: 300px;

 }
 .detail-container{
 	height: 470px;

 }
 .filter-btn{
 position: absolute;
 top: 100px;
 right: 270px;
padding-top: -4px;
 }
 .card-btn{
 	position: absolute;
 top: 20px;
 right: 130px;
 }
 .img-search{
 	height: 200px;

 }

 .order-img{
 	height: 200px;
 }





</style>
</html>