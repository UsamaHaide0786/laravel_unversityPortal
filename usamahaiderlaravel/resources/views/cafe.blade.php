@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome To Cafe</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/cafe/products')}}">Products</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/cafe/productincafe')}}">ProductsInCafe</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/cafe/purchase/insert')}}">Purchase</a>
    </li>

  </ul>
</div>

@endsection
