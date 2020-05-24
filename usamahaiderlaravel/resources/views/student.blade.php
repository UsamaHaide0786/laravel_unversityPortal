@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Students</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/student/insert')}}">Add New Student</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/student/view')}}">View Available Students</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/student/update')}}">Update Student</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/student/delete/insert')}}">Delete Student</a>
    </li>

  </ul>
</div>

@endsection
