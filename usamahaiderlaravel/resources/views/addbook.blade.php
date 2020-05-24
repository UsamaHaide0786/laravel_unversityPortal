@extends('base')
@section('content')
<form action="/book/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">Book ISBN</label>
    <input  class="form-control" name="bid"  placeholder="Enter Book ISBN">

  </div>
  <div class="form-group">
    <label for="name">Book Title</label>
    <input  class="form-control" name="bt"  placeholder="Enter Book Title">
  </div>
  <div class="form-group">
    <label for="type">Book Author</label>
    <input  class="form-control" name="ba"  placeholder="Enter Book Author">
  </div>
  <div class="form-group">
    <label for="price">Book Price</label>
    <input  class="form-control" name="bp"  placeholder="Enter Book Price">

  </div>
  <div class="form-group">
    <label for="name">Book Publisher</label>
    <input  class="form-control" name="bpb"  placeholder="Enter Book Publisher">
  </div>
  <div class="form-group">
    <label for="copies">Book Copies</label>
    <input  class="form-control" name="bc"  placeholder="Enter Number of Copies">

  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
