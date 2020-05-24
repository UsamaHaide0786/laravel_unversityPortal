@extends('base')
@section('content')
<form action="/registercourse/drop/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Course Code</label>
    <input  class="form-control" name="cc"  placeholder="Enter Course Code">
    <small id="emailHelp" class="form-text text-muted">Enter the Code of the Course you want to drop.</small>
  </div>


  <button type="submit" class="btn btn-primary">Drop</button>
</form>
@endsection
