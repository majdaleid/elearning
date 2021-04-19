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
        <form method="post" action="{{route('updateteacher')}}" enctype="multipart/form-data">
                   {{csrf_field()}}
                      <input type="hidden" id="custId" name="id" value="{{$teacher->id}}}">
                      <div class="form-group">
                        <label for="cname">teacherName</label>
                          <input id="cname" class="form-control" name="teacherName" minlength="2" type="text" value="{{$teacher->teacherName}}"  required>


                 <label> description </label>

                  <div class="form-group">
                  <textarea class="form-control" id="description" placeholder="Enter the description2" name="description">  {!! $teacher->description !!}</textarea>
                    </div>
                    <label for="cname">teacher image</label>
                      <input id="cname" class="form-control" name="teacherImage"   type="file" value="{{$teacher->teacherImage}}" required>
                       {{$teacher->teacherImage}}
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
@section('scripts')
 <!--<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>-->
 <!--<script>
       ClassicEditor
           .create( document.querySelector( '#courseDescription1' ) )
           .catch( error => {
               console.error( error );
           } );
   </script>-->
   <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script>
       CKEDITOR.replace('description2', {
           filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
           filebrowserUploadMethod: 'form'
       });
       </script>




   <script>
          ClassicEditor
             .create( document.querySelector( '#description2' ) )
              .catch( error => {
                 console.error( error );
               } );
       </script>
 <script src="backend/js/bt-maxLength.js"></script>


@endsection
