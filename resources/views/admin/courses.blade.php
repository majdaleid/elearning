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
                  <th>Course number #</th>
                  <th>Image</th>
                  <th>Course Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
              <tr>
                  <td>{{$increment}}</td>
                  <td><img src="http://localhost/elearning/storage/app/public/courseImages/{{$course->courseImage}}" alt=""></td>
                  <td>{{$course->courseName}} </td>
                  <td>{{$course->coursePrice}} </td>
                  <td>{{$course->courseDescription1}}  </td>

                  <td>
                    <label class="badge badge-success">Activated</label>
                  </td>

                  <td>
                    <label class="badge badge-danger">unactivated</label>
                  </td>

                  <td>
                  <button class="btn btn-outline-primary" onclick="window.location='{{url('/editcourse/'.$course->id)}}'">Edit</button>
                  <a href="deletecourse/{{$course->id}}" class="btn btn-outline-danger" id="delete">Delete</a>

                  <button class="btn btn-outline-warning" onclick="window.location='{{url('/unactivate_product/'.$course->id)}}'">Unactivate</button>

                  <button class="btn btn-outline-success" onclick="window.location='{{url('/activate_product/'.$course->id)}}'">Activate</button>

                </td>
              </tr>
              <input type="hidden" id="custId" name="custId" value="{{$increment=$increment+1}}">
@endforeach

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
