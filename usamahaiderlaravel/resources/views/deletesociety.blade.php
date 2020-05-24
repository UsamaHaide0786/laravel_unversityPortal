@extends('base')
@section('content')
<form action="/societies/delete/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Society ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter society ID">
    <small id="emailHelp" class="form-text text-muted">Enter the ID of the Society you want to delete.</small>
  </div>
  <button type="submit" class="btn btn-primary">Delete</button>
@endsection
