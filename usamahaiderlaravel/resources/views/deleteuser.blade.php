@extends('base')
@section('content')
<form action="/user/delete/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">User ID</label>
    <input  class="form-control" name="uid"  placeholder="Enter User ID">
    <small id="up" class="form-text text-muted">Enter the ID of the User you want to delete.</small>
  </div>


  <button type="submit" class="btn btn-primary">Delete</button>
</form>
@endsection
