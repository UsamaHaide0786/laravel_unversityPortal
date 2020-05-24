@extends('base')
@section('content')
<form action="/cafe/products/delete/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">DeleteProduct ID</label>
    <input  class="form-control" name="pid"  placeholder="Enter  ID">
    <small id="pid" class="form-text text-muted">Enter the ID of the Product you want to Delete.</small>
  </div>

  <button type="submit" class="btn btn-primary">Delete</button>
</form>
@endsection
