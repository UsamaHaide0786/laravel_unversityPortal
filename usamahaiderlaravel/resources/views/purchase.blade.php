@extends('base')
@section('content')
<form action="/cafe/purchase/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="sid">Student ID</label>
    <input  class="form-control" name="sid"  placeholder="Enter student ID">
    <small id="emailHelp" class="form-text text-muted">We'll never share your ID with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="pid">Product ID</label>
    <input  class="form-control" name="pid"  placeholder="Enter Product ID">
  </div>
  <div class="form-group">
    <label for="cid">Cafe ID</label>
    <input  class="form-control" name="cid"  placeholder="Enter Cafe ID">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input  class="form-control" name="q" placeholder="Quantity">
  </div>
  <button type="submit" class="btn btn-primary">Purchase</button>
</form>
@endsection
