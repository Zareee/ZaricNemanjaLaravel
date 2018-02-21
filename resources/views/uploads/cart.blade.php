@extends ('layouts.master')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Items:({{$count}})</th>
          <th scope="col">Title</th>
          <th scope="col">Price: ({{number_format($price),2}}) din.</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      @foreach($carts as $cart)
      <tbody>
        <tr>
          <td>
            <a href="{{$cart->image}}" data-lightbox="roadtrip">
            <img class="img-thumbnail img-fluid" style="max-width:150px" src="{{$cart->image}}" alt="...">
            </a>
          </td>
          <td>{{$cart->title}}</td>
          <td>{{$cart->price}} din.</td>
          <td>{{$cart->description}}</td>
          <td><a href="/remove/{{$cart->id}}" ><button type="button"class="btn btn-outline-dark btn-sm ml-2">Remove</button></a></td>
        </tr>       
      </tbody>
      @endforeach
    </table>
    </div>


    <!-- form order-->
    <div class="col">
      <center>
      <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-12 col-md-offset-6 col-lg-12 col-lg-offset-6">
      <div class="panel panel-default" id="panelcreate">
      <h1>Place your order</h1>

      <form method="POST" action="/order" >
        {{ csrf_field() }}
      <div class="container center_div">
      @include('layouts.errors')  

        <div class="form-group col-xs-4">
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>

        <div class="form-group col-xs-4">
          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
        </div>

        <div class="form-group col-xs-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
        </div>

        <div class="form-group col-xs-4">
          <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
        </div>

        <div class="form-group col-xs-2">
          <div class="row">
            <div class="col">
             <input type="text" class="form-control" id="city" name="city" placeholder="City" required> 
            </div>
            <div class="col">
             <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zip Code" required>
          </div>
        </div>
        </div>

        <div class="form-group col-xs-4">

          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
        </div>

        <div class="form-group col-xs-4">

          <textarea type="textarea" name="note" class="form-control" id="note" placeholder="Note"></textarea>
        </div>

        <input type="hidden" value="{{}}" class="form-control" id="item_id" name="item_id">

        <div class="form-group">
        <button type="submit" class="btn btn-secondary btn-lg">Order</button>
        </div>

      </div>  
      </form>
      </div>
      </div>
      </center>
    </div>
  </div>
</div>
    @endsection