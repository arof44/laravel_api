<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')</title>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>


<body>


	<form class="form-inline" action="/search">
		@csrf
		<label for="keyword">Kata kunci : </label>
		<input type="text" class="form-control" name="keyword">
		<button type="submit" class="btn btn-primary">Search</button>
	</form>
<div class="container">
		<h2>Daftar Artikel</h2>
		@foreach($artikel as $a)

<div class="card mb-3">
  <img src="{{ $a->urlToImage}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$a->title}}</h5>
    <p class="card-text">{{ $a->description}}</p>
    <p>{{ $a->url}}<p>
  </div>
</div>
@endforeach
	</div>

<!--	<div class="container">
		<h2>Daftar Artikel</h2>
		@foreach($artikel as $a)
		<div class="panel panel-default" col=>
			<div class="panel-heading">
				<h3>{{ $a->title}}<h3>
			</div>
			<div class="panel-body">
				<img src="{{ $a->urlToImage}}">
				<p>{{ $a->description}}<p>
				<p>{{ $a->url}}<p>
			</div>
		</div>
		@endforeach
	</div>
-->

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	</body>
	
</html>