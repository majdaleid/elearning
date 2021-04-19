<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{
    /*public function sliders()
    {
      return view('admin.slides');
    }*/
    public function sliders(){
      $sliders=Slider::get();
      return view('admin.slides')->with('sliders',$sliders);
    }

    public function addslider(){
      return view('admin.addslider');
    }


    public function saveslider(Request $request){
    //  dd($request);
  //dd($request->input('product_category'));
  /*$this->validate($request,[
    'Description1'=>'required',
    'Description2'  =>'required',
    'slider_image'=>'image|nullable|max:1999',
    'Description3'  =>'required',
    'slider_image2'=>'image|nullable|max:1999',
    'Description4'  =>'required',
    'slider_image3'=>'image|nullable|max:1999',
  ]);*/



    if($request->hasfile('slider_image')){
    //:get filename with ext
    $fileNameWithExt=$request->file('slider_image')->getClientOriginalName();

    //2:get just $file name

    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

    //3: get just extention
    $extention=$request->file('slider_image')->getClientOriginalExtension();


    //4:file name to store

    $fileNameToStore=$fileName.'_'.time().'.'.$extention;

    //upload image

    $path=$request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
  }
  else{
  $fileNameToStore='noimage.jpg';
  }


/*slider image2*/
  if($request->hasfile('slider_image2')){
  //:get filename with ext
  $fileNameWithExt2=$request->file('slider_image2')->getClientOriginalName();

  //2:get just $file name

  $fileName2=pathinfo($fileNameWithExt2,PATHINFO_FILENAME);

  //3: get just extention
  $extention2=$request->file('slider_image2')->getClientOriginalExtension();


  //4:file name to store

  $fileNameToStore2=$fileName2.'_'.time().'.'.$extention2;

  //upload image

  $path2=$request->file('slider_image2')->storeAs('public/slider_images2',$fileNameToStore2);
}
else{
$fileNameToStore2='noimage.jpg';
}

/*slider image 3*/

if($request->hasfile('slider_image3')){
//:get filename with ext
$fileNameWithExt3=$request->file('slider_image3')->getClientOriginalName();

//2:get just $file name

$fileName3=pathinfo($fileNameWithExt3,PATHINFO_FILENAME);

//3: get just extention
$extention3=$request->file('slider_image3')->getClientOriginalExtension();


//4:file name to store

$fileNameToStore3=$fileName3.'_'.time().'.'.$extention3;

//upload image

$path3=$request->file('slider_image3')->storeAs('public/slider_images3',$fileNameToStore3);
}
else{
$fileNameToStore3='noimage.jpg';
}











  $slider=new Slider();
  $slider->Description1=$request->input('Description1');
  $slider->Description2=$request->input('Description2');
  $slider->slider_image=$fileNameToStore;
  $slider->Description3=$request->input('Description3');
  $slider->slider_image2=$fileNameToStore2;
  $slider->Description4=$request->input('Description4');
$slider->slider_image3=$fileNameToStore3;
  //$slider->status=1;
  //$product->status=$request->input('product_status');
  /*
  if($request->input('product_status')){
  $product->status=1;
  }else{
    $product->status=0;
  }*/
  $slider->save();
  return redirect('/addslider')->with('status', 'the Slider has been saved successfully');

      }



      public function editslider($id){
          //$categories=Category::get();
        /*$categories=Category::All()->pluck('category_name','category_name');*/

        $slider=Slider::find($id);

      /*  $product=Product::where('id',$id)->get();*/
        return view('admin.editslider')->with('slider',$slider);
      }







      public function updateslider(Request $request){

        $this->validate($request,[
          'Description1'=>'required',
          'Description2'  =>'required',
          'slider_image'=>'image|nullable|max:1999'
        ]);


       $slider =Slider::find($request->input('id'));



       //$slider->slider_image3=$fileNameToStore3;



      // dd($request);
       $slider->Description1=$request->input('Description1');
       $slider->Description2=$request->input('Description2');
 $slider->Description3=$request->input('Description3');
  $slider->Description4=$request->input('Description4');

    if($request->hasfile('slider_image')){
    //:get filename with ext
    $fileNameWithExt=$request->file('slider_image')->getClientOriginalName();

    //2:get just $file name

    $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

    //3: get just extention
    $extention=$request->file('slider_image')->getClientOriginalExtension();


    //4:file name to store

    $fileNameToStore=$fileName.'_'.time().'.'.$extention;

    //upload image

    $path=$request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);

    if ($slider->slider_image !='noimage.jpg' ){
      Storage::delete('public/slider_images/'.$slider->slider_image);


    }

    $slider->slider_image = $fileNameToStore;
    }



    if($request->hasfile('slider_image2')){
    //:get filename with ext
    $fileNameWithExt2=$request->file('slider_image2')->getClientOriginalName();

    //2:get just $file name

    $fileName2=pathinfo($fileNameWithExt2,PATHINFO_FILENAME);

    //3: get just extention
    $extention2=$request->file('slider_image2')->getClientOriginalExtension();


    //4:file name to store

    $fileNameToStore2=$fileName2.'_'.time().'.'.$extention2;

    //upload image

    $path=$request->file('slider_image2')->storeAs('public/slider_images2',$fileNameToStore2);

    if ($slider->slider_image2 !='noimage.jpg' ){
      Storage::delete('public/slider_images2/'.$slider->slider_image2);


    }

    $slider->slider_image2 = $fileNameToStore2;
    }





    if($request->hasfile('slider_image3')){
    //:get filename with ext
    $fileNameWithExt3=$request->file('slider_image3')->getClientOriginalName();
//dd($fileNameWithExt3);
    //2:get just $file name

    $fileName3=pathinfo($fileNameWithExt3,PATHINFO_FILENAME);

    //3: get just extention
    $extention3=$request->file('slider_image3')->getClientOriginalExtension();


    //4:file name to store

    $fileNameToStore3=$fileName3.'_'.time().'.'.$extention3;

    //upload image

    $path=$request->file('slider_image3')->storeAs('public/slider_images3',$fileNameToStore3);

    if ($slider->slider_image3 !='noimage.jpg' ){
      Storage::delete('public/slider_images3/'.$slider->slider_image3);


    }

    $slider->slider_image3 = $fileNameToStore2;
    }










/*slider image3*/
/*
    if($request->hasfile('slider_image3')){
    //:get filename with ext
    $fileNameWithExt3=$request->file('slider_image3')->getClientOriginalName();

    //2:get just $file name

    $fileName3=pathinfo($fileNameWithExt3,PATHINFO_FILENAME);

    //3: get just extention
    $extention3=$request->file('slider_image3')->getClientOriginalExtension();


    //4:file name to store

    $fileNameToStore3=$fileName3.'_'.time().'.'.$extention3;

    //upload image

    $path=$request->file('slider_image3')->storeAs('public/slider_images3',$fileNameToStore3);

    if ($slider->slider_image3 !='noimage.jpg' ){
      Storage::delete('public/slider_images3/'.$slider->slider_image3);


    }

    $slider->slider_image3 = $fileNameToStore3;
    }
*/



    $slider->update();
    return redirect('/slides')->with('status', 'the slider has been updated successfully');

    }


    public function deleteslider($id){

    $slider=Slider::find($id);
     if ($slider->slider_image !='noimage.jpg' ){
    Storage::delete('public/slider_images/'.$slider->slider_image);
      }
      if ($slider->slider_image2 !='noimage.jpg' ){
     Storage::delete('public/slider_images2/'.$slider->slider_image2);
       }
       if ($slider->slider_image3 !='noimage.jpg' ){
      Storage::delete('public/slider_images3/'.$slider->slider_image3);
        }


      $slider->delete();
    return redirect('/slides')->with('status', 'the slider has been deleted successfully');

  }


  public function activateslider($id){
    $slider =Slider::find($id);
    $slider->status=1;
    $slider->update();
    return redirect('/sliders')->with('status', 'the  status has been activated successfully');

  }


  public function unactivateslider($id){
    $slider =Slider::find($id);
    $slider->status=0;
    $slider->update();
    return redirect('/sliders')->with('status', 'the  status has been deactivated successfully');


  }






}
