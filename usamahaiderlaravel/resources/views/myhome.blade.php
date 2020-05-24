@extends('base')
@section('content')
<hr>
<div class="">
  <h1>Welcome</h1>
  <hr>
  <ul class="list-group list-group-horizontal">
    <li class="list-group-item">
      <a href="{{url('/cafe')}}">Cafe</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/societies')}}">Societies</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/book')}}">Books</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/sessions')}}">Session</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/registercourse')}}">RegisterCourse</a>
    </li>
    <li class="list-group-item">
      <a href="{{url('/user')}}">Users</a>
    </li>
  </li>
  <li class="list-group-item">
    <a href="{{url('/teacher')}}">Teachers</a>
  </li>
  <li class="list-group-item">
    <a href="{{url('/student')}}">Students</a>
  </li>
  <li class="list-group-item">
    <a href="{{url('/teacherissue')}}">TeacherIssue</a>
  </li>
  </ul>
</div>

@endsection
