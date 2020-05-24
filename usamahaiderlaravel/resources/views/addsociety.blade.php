@extends('base')
@section('content')
<form action="/societies/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Society ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter student ID">

  </div>
  <div class="form-group">
    <label for="name">Society Name</label>
    <input  class="form-control" name="sn"  placeholder="Enter Product ID">
  </div>
  <div class="form-group">
    <label for="type">Society Type</label>
    <input  class="form-control" name="st"  placeholder="Enter Cafe ID">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
