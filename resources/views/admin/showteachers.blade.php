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
                  <th>Description 1 </th>
                  <th>Description 2</th>
                  <th>sliderImage</th>
                  <th>Description 3</th>
                  <th>sliderImage2</th>
                  <th>Description 4</th>
                  <th>sliderImage3</th>
              </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
              <tr>
                  <td>{{$increment}}</td>
                  <td>
                  
                     
                       <img src= "{{ url('storage/app/public/teacherImages/'.$teacher->teacherImage) }}" alt="">

                  </td>
                  <td>{{$teacher->teacherName}} </td>

                  <td>{{$teacher->description}}  </td>

                  <td>
                    <label class="badge badge-success">Activated</label>
                  </td>

                  <td>
                    <label class="badge badge-danger">unactivated</label>
                  </td>

                  <td>
                  <button class="btn btn-outline-primary" onclick="window.location='{{url('/edit_teacher/'.$teacher->id)}}'">Edit</button>
                  <a href="deleteteacher/{{$teacher->id}}" class="btn btn-outline-danger" id="delete">Delete</a>



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
