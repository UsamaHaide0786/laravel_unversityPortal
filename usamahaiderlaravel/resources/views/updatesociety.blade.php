@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatingSociety ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter Society ID">
    <small id="emailHelp" class="form-text text-muted">Enter the ID of the Society you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">Society ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter Society ID">

  </div>
  <div class="form-group">
    <label for="name">Society Name</label>
    <input  class="form-control" id="pid"  placeholder="Enter Society Name">
  </div>
  <div class="form-group">
    <label for="type">Society Type</label>
    <input  class="form-control" id="cid"  placeholder="Enter Society Type">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
