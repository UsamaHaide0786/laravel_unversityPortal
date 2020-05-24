@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatingBook ISBN</label>
    <input  class="form-control" id="sid"  placeholder="Enter Book ISBN">
    <small id="emailHelp" class="form-text text-muted">Enter the  ISBN of the Book you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">Book ISBN</label>
    <input  class="form-control" id="sid"  placeholder="Enter Book ISBN">

  </div>
  <div class="form-group">
    <label for="name">Book Title</label>
    <input  class="form-control" id="pid"  placeholder="Enter Book Title">
  </div>
  <div class="form-group">
    <label for="type">Book Author</label>
    <input  class="form-control" id="cid"  placeholder="Enter Book Author">
  </div>
  <div class="form-group">
    <label for="price">Book Price</label>
    <input  class="form-control" id="sid"  placeholder="Enter Book Price">

  </div>
  <div class="form-group">
    <label for="name">Book Publisher</label>
    <input  class="form-control" id="pid"  placeholder="Enter Book Publisher">
  </div>
  <div class="form-group">
    <label for="copies">Book Copies</label>
    <input  class="form-control" id="sid"  placeholder="Enter Number of Copies">

  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
