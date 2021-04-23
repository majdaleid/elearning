<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;
use App\Models\Order;
use App\Models\contact;
use Auth;
use App\Models\Course;
class ClientController extends Controller
{


    public function home(){
        $courses=Course::get();
      return view('client.home')->with('courses',$courses);
    }

    /*public function pricing($lang){
        App::setlocale($lang);
      return view('client.pricing');
    }*/

    public function pricing(){
      return view('client.pricing');
    }

    public function allcourses()
    {
      $courses=Course::get();
    return view('client.courses')->with('courses',$courses);
    }

  /*  public function courses(){
      return view('client.courses');
    }*/

    public function blog(){
      return view('client.blog');
    }

    public function contact(){
      return view('client.contact');
    }
    public function cart(){
      return view('client.cart');
    }
    public function checkout(){
      return view('client.checkout');
    }


    public function coursedetails($id){
      $course=Course::find($id);
      return view('client.coursedetails')->with('course',$course);
    }

    public function savecontact(Request $request){
//dd($request);
   $this->validate($request,[
                     'fname'=>'required',
                     'lname'  =>'required',
 					            'email'=>'required',
 					            'subject'=>'required',
                     'message'  =>'required'
                   ]);

                   $contact=new contact();
                //   dd($request);
                   $contact->fname=$request->input('fname');
                   $contact->lname=$request->input('lname');
 				           $contact->email=$request->input('email');
 				           $contact->subject=$request->input('subject');
                   $contact->message=$request->input('message');

                   $contact->save();
                   return redirect('/contact')->with('status', 'the message has been saved successfully');




    }

    public function logout(Request $request) {
  Auth::logout();
  return redirect('/home');
}
}
