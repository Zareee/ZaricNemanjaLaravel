

@extends ('layouts.master')


@section ('content')
<style>
	#panelcreate{
		margin-top: 20px;
        border-style: double;
        border-width: 3px;
        background-color:#a6a6a6; 
	}
</style>
<div class="container col-6">
	<center>
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-12 col-md-offset-6 col-lg-12 col-lg-offset-6">
	<div class="panel panel-default" id="panelcreate">
	<h1>Upload Image</h1>

	<form method="POST" action="/uploads" enctype="multipart/form-data" >
		{{ csrf_field() }}
	<div class="container center_div">	

	  <div class="form-group col-md-5">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
	  </div>

	  <div class="form-group col-md-5">
	    <label for="price">Price</label>
	    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
	  </div>

	  <div class="form-group col-md-5">
	    <label for="description">Description</label>
	    <textarea type="textarea" name="description" class="form-control" id="description" placeholder="Description" required></textarea>
	  </div>

	  <div class="form-group col-md-5">
		 <label for="image">Image:</label>		 
		 <input type="file" class="form-control-file"  name="image" required>
	  </div>

	  <div class="form-group">
	  <button type="submit" class="btn btn-success">Upload</button>
	  </div>

	 @include('layouts.errors')

	</div>  
	</form>
	</div>
	</div>
	</center>
</div>

@endsection