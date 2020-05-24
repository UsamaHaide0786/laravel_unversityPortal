@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome To Users</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/user/insert')}}">Add New User</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/user/view')}}">View Available Users</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/user/update')}}">Update User</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/user/delete/insert')}}">Delete User</a>
    </li>

  </ul>
</div>

@endsection
