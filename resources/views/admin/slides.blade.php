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
                  <th> number #</th>
                  <th>Description1</th>
                  <th>Description2</th>
                  <th>slider_image</th>
                  <th>Description3</th>
                  <th>slider_image2</th>
                  <th>Description4</th>
                  <th>slider_image3</th>
              </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
              <tr>
                  <td>{{$increment}}</td>
                  <td>{{$slider->Description1}} </td>
                  <td>{{$slider->Description2}} </td>
              <td><img src="http://localhost/elearning/storage/app/public/slider_images/{{$slider->slider_image}}" alt=""></td>
                  <td>{{$slider->Description3}}  </td>
              <td><img src="http://localhost/elearning/storage/app/public/slider_images2/{{$slider->slider_image2}}" alt=""></td>
                  <td>{{$slider->Description4}}  </td>
                  <td><img src="http://localhost/elearning/storage/app/public/slider_images3/{{$slider->slider_image3}}" alt=""></td>
                  <td>
                    <label class="badge badge-success">Activated</label>
                  </td>

                  <td>
                    <label class="badge badge-danger">unactivated</label>
                  </td>

                  <td>
                  <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_slider/'.$slider->id)}}'">Edit</button>
                  <a href="deleteslider/{{$slider->id}}" class="btn btn-outline-danger" id="delete">Delete</a>


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
