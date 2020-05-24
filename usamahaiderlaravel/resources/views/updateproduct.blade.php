@extends('base')
@section('content')
<form action="/cafe/products/update/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group",>
    <label for="id">updatingProduct ID</label>
    <input  class="form-control" name="uproductId"  placeholder="Enter ID">
    <small id="emailHelp" class="form-text text-muted">Enter the ID of product you want to update.</small>
  </div>
  <div class="form-group",>
    <label for="id">Product ID</label>
    <input  class="form-control" name="productId"  placeholder="Enter ID">

  </div>
  <div class="form-group">
    <label for="name">Product Name</label>
    <input  class="form-control" name="productName"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="price">Product Price</label>
    <input  class="form-control" name="productPrice"  placeholder="Enter Price">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
