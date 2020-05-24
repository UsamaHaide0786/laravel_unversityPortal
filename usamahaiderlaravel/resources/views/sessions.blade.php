@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Sessions</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/sessions/insert')}}">Add New Session</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/sessions/view')}}">View Available Sessions</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/sessions/update')}}">Update Session</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/sessions/delete/insert')}}">Delete Session</a>
    </li>

  </ul>
</div>

@endsection
