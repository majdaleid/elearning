<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;
class TeacherController extends Controller
{
  public function showteachers()
  {
    $Teachers=Teacher::get();
return view('admin.showteachers')->with('teachers',  $Teachers);
  }


  public function saveteacher(Request $request)
  {

    $this->validate($request,[
                  'teacherName'=>'required',
                  'description'  =>'required',
                  'teacherImage'=>'image|nullable|max:1999'
                ]);



                  if($request->hasfile('teacherImage')){
                  //:get filename with ext
                  $fileNameWithExt=$request->file('teacherImage')->getClientOriginalName();

                  //2:get just $file name

                  $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

                  //3: get just extention
                  $extention=$request->file('teacherImage')->getClientOriginalExtension();

                  //4:file name to store

                  $fileNameToStore=$fileName.'_'.time().'.'.$extention;

                  //upload image

                  $path=$request->file('teacherImage')->storeAs('public/teacherImages',$fileNameToStore);
                }
                else{
                $fileNameToStore='noimage.jpg';
                }
                $teacher=new Teacher();
                $teacher->teacherName=$request->input('teacherName');
                $teacher->description=$request->input('description');
                $teacher->teacherImage=$request->input('teacherImage');
                $teacher->teacherImage=$fileNameToStore;


                  $teacher->save();
              //    dd("teacher added succfully");
                return redirect('/showteachers')->with('status', 'the '.$teacher->teacherName.' has been saved successfully');





  //  dd("asdsad");
return view('admin.courses');
  }

  public function edit_teacher($id){
    $teacher=Teacher::find($id);
return view('admin.edit_teacher')->with('teacher',$teacher);

  }



      public function updateteacher(Request $request){


     $this->validate($request,[
                   'teacherName'=>'required',
                   'description'  =>'required',
                   'teacherImage'=>'image|nullable|max:1999'
                 ]);



              $teacher =Teacher::find($request->input('id'));
          //    dd($teacher);
           $teacher->teacherName=$request->input('teacherName');
           $teacher->description=$request->input('description');

           if($request->hasfile('teacherImage')){
           //:get filename with ext
           $fileNameWithExt=$request->file('teacherImage')->getClientOriginalName();

           //2:get just $file name

           $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

           //3: get just extention
           $extention=$request->file('teacherImage')->getClientOriginalExtension();


           //4:file name to store

           $fileNameToStore=$fileName.'_'.time().'.'.$extention;

           //upload image

           $path=$request->file('teacherImage')->storeAs('public/teacherImages',$fileNameToStore);

           if ($teacher->teacherImage !='noimage.jpg' ){
             Storage::delete('public/teacherImages/'.$teacher->teacherImage);


           }

           $teacher->teacherImage = $fileNameToStore;
           }


           $teacher->update();
           return redirect('/showteachers')->with('status', 'the '.  $teacher->teacherName.' course has been updated successfully');
   }
   public function deleteteacher($id){

      $teacher=Teacher::find($id);
       if ($teacher->teacherImage !='noimage.jpg' ){
      Storage::delete('public/teacherImages/'.$teacher->teacherImage);
        }
        $teacher->delete();
      return redirect('/showteachers')->with('status', 'the '.  $teacher->teacherName.'category has been deleted successfully');

      }

}
