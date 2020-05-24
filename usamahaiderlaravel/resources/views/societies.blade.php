@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome To Societies</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/societies/insert')}}">Add New Society</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/societies/view')}}">View Societies</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/societies/update')}}">Update Society</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/societies/delete/insert')}}">Delete Society</a>
    </li>

  </ul>
</div>

@endsection
