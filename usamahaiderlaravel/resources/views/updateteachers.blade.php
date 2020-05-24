@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatinTeacher ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter  ID">
    <small id="up" class="form-text text-muted">Enter the  ID of the Teacher you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">Teacher ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter ID">

  </div>
  <div class="form-group">
    <label for="name">FirstName</label>
    <input  class="form-control" id="pid"  placeholder="FirstName">
  </div>
  <div class="form-group">
    <label for="type">LastName</label>
    <input  class="form-control" id="cid"  placeholder="LastName">
  </div>
  <div class="form-group">
    <label for="price">Desigenation</label>
    <input  class="form-control" id="sid"  placeholder="Desigenation">

  </div>
  <div class="form-group">
    <label for="name">Experience</label>
    <input  class="form-control" id="pid"  placeholder="Experience">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
