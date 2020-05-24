@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome To Book Store</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/book/insert')}}">Add New Book</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/book/view')}}">View Available Books</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/book/update')}}">Update Book</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/book/delete/insert')}}">Delete Book</a>
    </li>

  </ul>
</div>

@endsection
