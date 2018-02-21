@extends('layouts.master')
@section('content')
<div class="container">
<center>
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Zip Code</th>
      <th scope="col">Phone</th>
      <th scope="col">Note</th>
      <th scope="col">Images</th>
    </tr>
  </thead>
  <tbody>
      @foreach($orders as $order)
    <tr>
      <td>{{$order->name}}</td>
      <td>{{$order->lastname}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->address}}</td>
      <td>{{$order->city}}</td>
      <td>{{$order->zipcode}}</td>
      <td>{{$order->phone}}</td>
      <td>{{$order->note}}</td>
      @endforeach
      @foreach($items as $item)
      <td>{{$item}}</td> 
      @endforeach

    </tr>
  </tbody>
</table>
</center>
</div>
@endsection