@extends('base')
@section('content')
<form action="/student/delete/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Student ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter  ID">
    <small id="up" class="form-text text-muted">Enter the  ID of the Student you want to delete.</small>
  </div>

  <button type="submit" class="btn btn-primary">Delete</button>
</form>
@endsection
