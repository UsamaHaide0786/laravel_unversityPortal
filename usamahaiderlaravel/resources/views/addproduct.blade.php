@extends('base')
@section('content')
<form action="/cafe/products/done" method="post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

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

  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
