@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatingStudent ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter  ID">
    <small id="up" class="form-text text-muted">Enter the  ID of the Student you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">Student ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter ID">

  </div>
  <div class="form-group">
    <label for="name">SureName</label>
    <input  class="form-control" id="pid"  placeholder="SureName">
  </div>
  <div class="form-group">
    <label for="name">FirstName</label>
    <input  class="form-control" id="cid"  placeholder="FirstName">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input  class="form-control" id="add"  placeholder="Address">

  </div>
  <div class="form-group">
    <label for="name">DateOfBirth</label>
    <input  class="form-control" id="Dob"  placeholder="DateOfBirth">
  </div>

<div class="form-group">
  <label for="pid">Participant ID</label>
  <input  class="form-control" id="pid"  placeholder="Participant">
</div>

<div class="form-group">
  <label for="name">GPA</label>
  <input  class="form-control" id="gpa"  placeholder="GPA">
</div>

<div class="form-group">
  <label for="name">Gender</label>
  <input  class="form-control" id="Dob"  placeholder="Gender">
</div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
