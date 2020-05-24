@extends('base')
@section('content')
<form action="/user/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">User ID</label>
    <input  class="form-control" name="uid"  placeholder="Enter  ID">

  </div>
  <div class="form-group">
    <label for="tid">Tech ID</label>
    <input  class="form-control" name="tid"  placeholder="Enter Tid ID">
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input  type="password" class="form-control" name="psw"  placeholder="Enter password">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
