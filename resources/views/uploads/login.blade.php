@extends ('layouts.master')


@section ('content')
<style>
	#loginbox{
		margin-top: 20px;
        border-style: double;
        border-width: 3px;
        background-color:#a6a6a6;
	}
</style>
<div class="container">
	<center>
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
	<h1>Login</h1>

	<form method="POST" action="/login" >
		{{ csrf_field() }}
	<div class="container center_div">	

	  <div class="form-group col-md-4">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
	  </div>

	   <div class="form-group col-md-4">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
	  </div>

	  <div class="form-group">
	  <button type="submit" class="btn btn-primary">Login</button>
	  </div>

	 @include('layouts.errors')

	</div>  
	</form>
	</div>
	<center>
</div>

@endsection