@extends('base')
@section('content')
<form action="/sessions/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Session ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter Session ID">

  </div>
  <div class="form-group">
    <label for="name">Session Title</label>
    <input  class="form-control" name="st"  placeholder="Enter Session ID">
  </div>
  <div class="form-group">
    <label for="date">Session Date</label>
    <input  class="form-control" name="sd"  placeholder="Enter Session ID">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
