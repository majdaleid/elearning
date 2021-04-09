<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
      return view('admin.dashboard');
    }

    public function addcourses(){
    //  dd(33);
      return view('admin.addcourses');
    }

    public function addteacher(){
    //  dd(33);
      return view('admin.addteacher');
    }

    public function addslider(){
    //  dd(33);
      return view('admin.addslider');
    }
}
