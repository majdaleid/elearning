<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class AdminController extends Controller
{
    public function dashboard(){
      return view('admin.dashboard');
    }

    public function addcourses(){
    //  dd(33);
  //  $Teachers=Teacher::All()->pluck('teacherName','teacherName');
      $Teachers=Teacher::All();
      return view('admin.addcourses')->with('teachers',$Teachers);
    }

    public function addteacher(){
    //  dd(33);
      return view('admin.addTeacher');
    }

    public function addslider(){
    //  dd(33);
      return view('admin.addslider');
    }
}
