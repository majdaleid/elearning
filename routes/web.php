<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*ip detection*/
Route::get('/geoip',function(){
 //$geoipInfo=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    $geoipInfo=geoip()->getLocation('82.137.244.59');
  //return $geoipInfo->toArray();
  return $geoipInfo->country;
//dd($geoipInfo);
});
/*client*/

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
//Route::group('prefix'=>'{{language}}',function () {
  Route::get('/home','App\Http\Controllers\ClientController@home');


  //Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
  Route::get('logout', '\App\Http\Controllers\ClientController@logout');




Route::get('/allcourses','App\Http\Controllers\ClientController@courses');
Route::get('/pricing','App\Http\Controllers\ClientController@pricing');
Route::get('/courses','App\Http\Controllers\ClientController@courses');
Route::get('/blog','App\Http\Controllers\ClientController@blog');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/cart','App\Http\Controllers\ClientController@cart');
Route::get('/coursedetails','App\Http\Controllers\ClientController@coursedetails');
adadsa da

Route::post('/contact','App\Http\Controllers\ClientController@savecontact')->name('savecontact');
//Route::get('/checkout','App\Http\Controllers\ClientController@checkout');
  /*
  Route::get('/pricing/{lang}','App\Http\Controllers\ClientController@pricing');
  Route::get('/courses/{lang}','App\Http\Controllers\ClientController@courses');
  Route::get('/blog/{lang}','App\Http\Controllers\ClientController@blog');
  Route::get('/contact/{lang}','App\Http\Controllers\ClientController@contact');
  Route::get('/cart/{lang}','App\Http\Controllers\ClientController@cart');
  Route::get('/checkout/{lang}','App\Http\Controllers\ClientController@checkout');
*/

//})

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('dashboard');
      return redirect('/home');
})->name('dashboard');


//Route::get('/', [PaymentController::class, 'checkout']);
//Route::post('/transaction', [PaymentController::class, 'makePayment'])->name('make-payment');


/* payment
Route::get('/checkout', [PaymentController::class, 'checkout']);
Route::post('/checkout/transaction', [PaymentController::class, 'makePayment'])->name('make-payment');
*/
Route::group(['middleware' => 'auth'], function(){

  Route::get('/checkout', [PaymentController::class, 'checkout']);
  Route::post('/checkout/transaction', [PaymentController::class, 'makePayment'])->name('make-payment');

});


/*admin */

    Route::get('/admin','App\Http\Controllers\AdminController@dashboard')->name('dashboard');

    Route::post('/updatecourse','App\Http\Controllers\CourseController@updatecourse')->name('updatecourse');
    Route::get('/deletecourse/{id}','App\Http\Controllers\CourseController@deletecourse')->name('deletecourse');

    Route::get('/addcourses','App\Http\Controllers\AdminController@addcourses')->name('addcourses');
    Route::post('/savecourse','App\Http\Controllers\CourseController@savecourse')->name('savecourse');
    Route::get('/editcourse/{id}','App\Http\Controllers\CourseController@editcourse')->name('editcourse');


    Route::get('/addteacher','App\Http\Controllers\AdminController@addteacher')->name('addteacher');
    Route::get('/addslider','App\Http\Controllers\AdminController@addslider')->name('addslider');


  Route::get('/courses','App\Http\Controllers\CourseController@courses');
  Route::get('/slides','App\Http\Controllers\SliderController@sliders');



  Route::get('/orders','App\Http\Controllers\PaymentController@orders')->name('orders');












//blogssss


Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('/post/{post}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('/post/{post}', [App\Http\Controllers\PostController::class, 'destroy']);





/*paypal*/
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'App\Http\Controllers\PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'App\Http\Controllers\PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'App\Http\Controllers\PaypalController@getPaymentStatus',));


/*
Route::get('handlepayment', 'App\Http\Controllers\PaypalController@handlepayment')->name('make.payment');
Route::get('cancelpayment', 'App\Http\Controllers\PaypalController@cancelpayment')->name('cancel.payment');
Route::get('paymentsuccess', 'App\Http\Controllers\PaypalController@paymentsuccess')->name('success.payment');
*/
