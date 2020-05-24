@extends('base')
@section('content')
<form action="/book/delete/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="id">ISBN</label>
    <input  class="form-control" name="bid"  placeholder="Enter Book ISBN">
    <small id="emailHelp" class="form-text text-muted">Enter the ISBN of the Book you want to delete.</small>
  </div>
  <button type="submit" class="btn btn-primary">Delete</button>
@endsection
