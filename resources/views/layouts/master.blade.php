<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
	<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
	<div class="row">
	<div class="mt-5 mb-5 container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="{{route('home')}}">WebRTC</a>	

		  @if(auth()->check())
		   <form method="POST" action="{{url('/logout')}}" class="form-inline ml-auto my-2 my-lg-0">
		   	@csrf
		   	<div class="form-group">
		      <a href="{{url('/account')}}">
		      	<input type="text" readonly class='form-control-plaintext' value="Welcome, {{auth()->user()->name}}">
		      </a>
		    </div>
		    <div class="form-group">
		    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
		    </div>
		   </form>
		  @endif
		
		</nav>
	</div>
	</div>
	@yield('body')
</body>
</html>