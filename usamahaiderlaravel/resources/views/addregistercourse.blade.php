@extends('base')
@section('content')
<form action="/registercourse/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Course Code</label>
    <input  class="form-control" name="cc"  placeholder="Enter Course Code">

  </div>
  <div class="form-group">
    <label for="id">Teacher ID</label>
    <input  class="form-control" name="tid"  placeholder="Enter Particpant ID">
  </div>
  <div class="form-group">
    <label for="id">Section</label>
    <input  class="form-control" name="s"  placeholder="Enter Particpant ID">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
