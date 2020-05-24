@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatingSession ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter Society ID">
    <small id="emailHelp" class="form-text text-muted">Enter the ID of the Session you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">Session ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter Session ID">

  </div>
  <div class="form-group">
    <label for="name">Session Name</label>
    <input  class="form-control" id="pid"  placeholder="Enter Session ID">
  </div>
  <div class="form-group">
    <label for="date">Session Date</label>
    <input  class="form-control" id="cid"  placeholder="Enter Session ID">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
