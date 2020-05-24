@extends('base')
@section('content')
<form action="/teacher/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Teacher ID</label>
    <input  class="form-control" name="tid"  placeholder="Enter ID">

  </div>
  <div class="form-group">
    <label for="name">FirstName</label>
    <input  class="form-control" name="fn"  placeholder="FirstName">
  </div>
  <div class="form-group">
    <label for="type">LastName</label>
    <input  class="form-control" name="ln"  placeholder="LastName">
  </div>
  <div class="form-group">
    <label for="price">Desigenation</label>
    <input  class="form-control" name="d"  placeholder="Desigenation">

  </div>
  <div class="form-group">
    <label for="name">Experience</label>
    <input  class="form-control" name="e"  placeholder="Experience">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
