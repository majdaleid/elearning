@extends('layouts.appadmin')
@section('content')

          <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">add Teacher</h4>
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
                 


          <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="cname">Teacher Name</label>
              <input id="cname" class="form-control" name="teacherName" minlength="2" type="text" required>



       <label> Description about the Teacher</label>

        <div class="form-group">
        <textarea class="form-control" id="description" placeholder="Enter the description" name="description"></textarea>
          </div>
                  <label for="cname">teacher image</label>
                  <input id="cname" class="form-control" name="profile_image"   type="file" required>


            </div>
              <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
        </form>      



@endsection
@section('scripts')

   <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>




   <script>
       /*   ClassicEditor
             .create( document.querySelector( '#description' ) )
              .catch( error => {
                 console.error( error );
               } );*/
       </script>
 <script src="backend/js/bt-maxLength.js"></script>


@endsection
