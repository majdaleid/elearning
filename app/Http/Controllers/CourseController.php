<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function courses()
    {
      $courses=Course::get();
return view('admin.courses')->with('courses',$courses);
    }

    public function savecourse(Request $request)
    {


      $this->validate($request,[
                    'courseName'=>'required',
                    'coursePrice'  =>'required',
                    'courseDescription1'  =>'required',
                    'courseImage'=>'image|nullable|max:1999'
                  ]);



                    if($request->hasfile('courseImage')){
                    //:get filename with ext
                    $fileNameWithExt=$request->file('courseImage')->getClientOriginalName();

                    //2:get just $file name

                    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

                    //3: get just extention
                    $extention=$request->file('courseImage')->getClientOriginalExtension();

                    //4:file name to store

                    $fileNameToStore=$fileName.'_'.time().'.'.$extention;

                    //upload image

                    $path=$request->file('courseImage')->storeAs('public/courseImages',$fileNameToStore);
                  }
                  else{
                  $fileNameToStore='noimage.jpg';
                  }
                  $course=new Course();
                  $course->courseName=$request->input('courseName');
                  $course->coursePrice=$request->input('coursePrice');
                  $course->courseDescription1=$request->input('courseDescription1');
                  $course->courseImage=$fileNameToStore;


                  $course->save();
                  return redirect('/addcourses')->with('status', 'the '.$course->courseName.' has been saved successfully');





    //  dd("asdsad");
return view('admin.courses');
    }

    public function editcourse($id){
      $course=Course::find($id);
return view('admin.editcourse')->with('course',$course);

    }



        public function updatecourse(Request $request){


       $this->validate($request,[
                     'courseName'=>'required',
                     'coursePrice'  =>'required',
                     'courseDescription1'  =>'required',
                     'courseImage'=>'image|nullable|max:1999'
                   ]);



                $course =Course::find($request->input('id'));

             $course->courseName=$request->input('courseName');
             $course->coursePrice=$request->input('coursePrice');
             $course->courseDescription1=$request->input('courseDescription1');

             if($request->hasfile('courseImage')){
             //:get filename with ext
             $fileNameWithExt=$request->file('courseImage')->getClientOriginalName();

             //2:get just $file name

             $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

             //3: get just extention
             $extention=$request->file('courseImage')->getClientOriginalExtension();


             //4:file name to store

             $fileNameToStore=$fileName.'_'.time().'.'.$extention;

             //upload image

             $path=$request->file('courseImage')->storeAs('public/courseImages',$fileNameToStore);

             if ($course->courseImage !='noimage.jpg' ){
               Storage::delete('public/courseImages/'.$course->courseImage);


             }

             $course->courseImage = $fileNameToStore;
             }


             $course->update();
             return redirect('/courses')->with('status', 'the '.  $course->courseName.' course has been updated successfully');
     }
     public function deletecourse($id){

        $course=Course::find($id);
         if ($course->courseImage !='noimage.jpg' ){
        Storage::delete('public/courseImages/'.$course->courseImage);
          }
          $course->delete();
        return redirect('/courses')->with('status', 'the '.  $course->courseName.'category has been deleted successfully');

        }

}
