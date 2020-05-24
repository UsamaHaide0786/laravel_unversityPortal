@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Select your session</h1>
  <hr>
  <ul class="list-group ">
    <li class="list-group-item">
      <a href="{{url('/registercourse/insert')}}">Add Course</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/registercourse/drop/insert')}}">Drop Course</a>
    </li>

  </ul>
</div>

@endsection
