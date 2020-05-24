@extends('base')
@section('content')
<form>
  <div class="form-group">
    <label for="id">UpdatingUser ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter User ID">
    <small id="up" class="form-text text-muted">Enter the ID of the User you want to update.</small>
  </div>
  <div class="form-group">
    <label for="id">User ID</label>
    <input  class="form-control" id="sid"  placeholder="Enter  ID">

  </div>
  <div class="form-group">
    <label for="tid">Tech ID</label>
    <input  class="form-control" id="tid"  placeholder="Enter Tid ID">
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input  type="password" class="form-control" id="cid"  placeholder="Enter password">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
