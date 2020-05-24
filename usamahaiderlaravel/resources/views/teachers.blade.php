@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Teachers</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/teacher/insert')}}">Add New Teacher</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/teacher/view')}}">View Available Teachers</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/teacher/update')}}">Update Teacher</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/teacher/delete/insert')}}">Delete Teacher</a>
    </li>

  </ul>
</div>

@endsection
