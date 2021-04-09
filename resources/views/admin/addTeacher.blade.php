@extends('layouts.appadmin')
@section('title')
add Teacher
@endsection
@section('content')

          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add a Teacher</h4>
                  <form method="post" action="" enctype="multipart/form-data">
                   @csrf

                      <div class="form-group">
                        <label for="cname">Product Name</label>
                        <input id="cname" class="form-control" name="product_name"  type="text" required>
                      </div>
                      <div class="form-group">
                        <label for="cname">Product price</label>
                        <input id="cname" class="form-control" name="product_price"   type="number" required>
                      </div>
                      <div class="form-group">
                        <label for="cname">Product category</label>
                        <select id="cars" name="product_category" class="form-control" >

                          <option value=""> </option>

                        </select>

                      </div>
                      <div class="form-group">
                        <label for="cname">Product image</label>
                        <input id="cname" class="form-control" name="product_image"   type="file" required>
                      </div>
                      <!--
                      <div class="form-group">
                        <label for="cname">Product Status</label>
                        <input id="cname" class="form-control" name="product_status"  value="" type="checkbox" checked required>
                      </div>
                    -->

                        <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('scripts')
<script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script>
@endsection
