@extends('layouts.appadmin')
@section('content')

          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">edit product</h4>
                  @if(Session::has('status'))
                <div class="alert alert-success">
                  {{Session::get('status')}}
                </div>
                @endif
                @if(Session::has('status1'))
                <div class="alert alert-danger">
                  {{Session::get('status1')}}
                </div>
                @endif
                <form method="post" action="{{route('updatecourse')}}" enctype="multipart/form-data">

                      @csrf
                      <input type="hidden" id="custId" name="id" value="{{$course->id}}}">
                      <div class="form-group">
                        <label for="cname">course Name</label>
                        <input id="cname" class="form-control" name="courseName" minlength="2" type="text" value="{{$course->courseName}}"  required>
                        <label for="cname">course price</label>
                        <input id="cname" class="form-control" name="coursePrice" minlength="2" type="text" value="{{$course->coursePrice}}" required>

                  <!--      <textarea name="content" id="courseDescription1">
                                &lt;p&gt;This is some sample content.&lt;/p&gt;
                            </textarea>
                      -->
<label for="cname">Description 1 </label>
                  <input id="cname" class="form-control" name="courseDescription1"  type="text" value="{{$course->courseDescription1}}" required>

                            <label for="cname">course image</label>
                            <input id="cname" class="form-control" name="courseImage"   type="file" value="{{$course->courseImage}}" required>
                             {{$course->courseImage}}
                             <!--<label for="cname">choose the teacher</label>
                            <select id="cars" name="product_category" class="form-control" >
                              <option value=""> </option>
                            </select>-->

                      </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
<!--@section('scripts')
 <!--<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>-->
 <!--<script>
       ClassicEditor
           .create( document.querySelector( '#courseDescription1' ) )
           .catch( error => {
               console.error( error );
           } );
   </script>-->

<!--<script src="backend/js/bt-maxLength.js"></script>
@endsection-->


@section('scripts')
  <script src="{{asset('backend/js/data-table.js')}}"></script>
  <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>

@endsection
