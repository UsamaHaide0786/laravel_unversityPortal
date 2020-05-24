@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome To Product Store</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/cafe/products/insert')}}">Add New Product</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/cafe/products/view')}}">View Available Products</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/cafe/products/update/insert')}}">Update Product</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/cafe/products/delete/insert')}}">Delete Product</a>
    </li>

  </ul>
</div>

@endsection
