@extends('layouts.appadmin')
@section('title')
add slider
@endsection
@section('content')

          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">create slider</h4>
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




                  <form class="cmxform" id="commentForm" method="POST"   action="{{route('updateslider')}}" enctype="multipart/form-data">
                   {{csrf_field()}}
                     <input type="hidden" id="custId" name="id" value="{{$slider->id}}}">
                      <div class="form-group">
                        <label for="cname">Description 1 </label>
                        <input id="cname" class="form-control" name="Description1"  type="text"  value="{{$slider->Description1}}" required>
                      </div>



                      <div class="form-group">
                        <label for="cname">Description 2 </label>
                        <input id="cname" class="form-control" name="Description2"  type="text" value="{{$slider->Description2}}" required>
                      </div>

                      <div class="form-group">
                        <label for="cname">Slider image</label>
                        <input id="cname" class="form-control" name="slider_image"   type="file" value="{{$slider->slider_image}}" required>
                        {{$slider->slider_image}}
                      </div>

                      <div class="form-group">
                          <label for="cname">Description 3 </label>
                      <textarea class="form-control" id="Description3" placeholder="Enter the Description3" name="Description3">
                         {!! $slider->Description3 !!}
                      </textarea>
                        </div>



                    <!--  <div class="form-group">
                        <label for="cname">Description 3 </label>
                        <input id="cname" class="form-control" id="Description3" name="Description3"  type="text" required>
                      </div>
-->
                      <div class="form-group">
                        <label for="cname">Slider image2</label>
                        <input id="cname" class="form-control" name="slider_image2"   type="file" value="{{$slider->slider_image2}}" required>
                          {{$slider->slider_image2}}
                      </div>

                    <!--  <div class="form-group">
                        <label for="cname">Description 4 </label>
                        <input id="cname" class="form-control" id="Description4" name="Description4"  type="text" required>
                      </div>
                  -->
                      <div class="form-group">
                          <label for="cname">Description 4 </label>
                      <textarea class="form-control" id="Description4" placeholder="Enter the Description4" name="Description4">
                           {!! $slider->Description4 !!}
                      </textarea>
                        </div>

                      <div class="form-group">
                        <label for="cname">Slider image3</label>
                        <input id="cname" class="form-control" name="slider_image3"   type="file" value="{{$slider->slider_image3}}" required>
                          {{$slider->slider_image3}}
                      </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>





<script>
       ClassicEditor
          .create( document.querySelector( '#Description3' ) )
           .catch( error => {
              console.error( error );
            } );
    </script>

    <script>
           ClassicEditor
              .create( document.querySelector( '#Description4' ) )
               .catch( error => {
                  console.error( error );
                } );
        </script>
<script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
@endsection
