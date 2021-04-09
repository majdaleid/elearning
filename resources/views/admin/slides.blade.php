@extends('layouts.appadmin')
@section('title')
courses
@endsection
@section('content')
<input type="hidden" id="custId" name="custId" value="{{$increment=1}}">

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Products</h4>

    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table id="order-listing" class="table">
            <thead>
              <tr>
                  <th>Order #</th>
                  <th>Image</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                  <td>{{$increment}}</td>
                  <td><img src="" alt=""></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>

                  <td>
                    <label class="badge badge-success">Activated</label>
                  </td>

                  <td>
                    <label class="badge badge-danger">unactivated</label>
                  </td>

                  <td>
                    <button class="btn btn-outline-primary" onclick="window.location=">Edit</button>
                    <a href=" " class="btn btn-outline-danger" id="delete">Delete</a>

                    <button class="btn btn-outline-warning" onclick="window.location=  ">Unactivate</button>

                    <button class="btn btn-outline-success" onclick="window.location= ">Activate</button>

                  </td>
              </tr>
              <input type="hidden" id="custId" name="custId" value="{{$increment=$increment+1}}">


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{asset('backend/js/data-table.js')}}"></script>
@endsection
