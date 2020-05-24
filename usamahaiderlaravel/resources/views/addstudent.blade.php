@extends('base')
@section('content')
<form action="/student/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="form-group">
    <label for="id">Student ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter ID">

  </div>
  <div class="form-group">
    <label for="name">SureName</label>
    <input  class="form-control" name="sn"  placeholder="SureName">
  </div>
  <div class="form-group">
    <label for="name">FirstName</label>
    <input  class="form-control" name="fn"  placeholder="FirstName">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input  class="form-control" name="add"  placeholder="Address">

  </div>
  <div class="form-group">
    <label for="name">DateOfBirth</label>
    <input  class="form-control" name="dob"  placeholder="DateOfBirth">
  </div>

<div class="form-group">
  <label for="pid">Participant ID</label>
  <input  class="form-control" name="pid"  placeholder="Participant">
</div>

<div class="form-group">
  <label for="name">GPA</label>
  <input  class="form-control" name="gpa"  placeholder="GPA">
</div>

<div class="form-group">
  <label for="name">Gender</label>
  <input  class="form-control" name="g"  placeholder="Gender">
</div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
