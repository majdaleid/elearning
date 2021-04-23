<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use App\Models\Order;
use Session;
use Stripe\Charge;
use DB;
use App\Models\Course;
use Auth;
class PaymentController extends Controller
{
  public function checkout($id=0)
    {
    //  $geoipInfo=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    if($id){
    //  dd("asddsa");
     $course=Course::find($id);
  //   dd($course);
         $geoipInfo=geoip()->getLocation('91.66.3.145');
       //return $geoipInfo->toArray();
       $country1=$geoipInfo->country;
      // return $geoipInfo->country;
        return view('client.checkout')->with('country',$country1)->with('course',$course);
          //return view('client.checkout')->with('course',$course);
      }
      else{
      //  dd("no id");
        $geoipInfo=geoip()->getLocation('91.66.3.145');
        $country1=$geoipInfo->country;
       // return $geoipInfo->country;
         return view('client.checkout')->with('country',$country1);
      }
    }


  /*  public function checkout($id=0)
      {
       //  $geoipInfo=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
          $geoipInfo=geoip()->getLocation('91.66.3.145');
          $country1=$geoipInfo->country;
         // return $geoipInfo->country;
           return view('client.checkout')->with('country',$country1);
        }
      }
*/







    public function makePayment(Request $request)
    {
        //  dd($request);
          $id=$request->input('id');
        //  dd($id);
 $course=Course::find($id);
 //dd($course);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        //Stripe\Charge::create ([
            $charge=Stripe\Charge::create ([
                "amount" => 100*$course->coursePrice,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill."
        ]);

        $order=new Order();
                    //  $order->name=$request->input('fullname2');
                    //  $order->address=$request->input('address2');
  $order->name=Auth::user()->name;
    $order->address="huhu firedastrße22 asdsad";
                      //$order->cart=serialize($cart);
                      $order->cart=$course->courseName;
                      $order->payment_id=$charge->id;

                      $order->save();

        Session::flash('success', 'Payment successfully made.');

        return back();
    }

    public function orders(){
          $orders=Order::get();


            return view('admin.orders')->with('orders',$orders);
        }




        public function makePaymentVorkasse(Request $request)
        {

              $id=$request->input('id');

      $course=Course::find($id);


            $order=new Order();
                        //  $order->name=$request->input('fullname2');
                        //  $order->address=$request->input('address2');
      $order->name=Auth::user()->name;
        $order->address="no address , Vorkasse";
                          //$order->cart=serialize($cart);
                          $order->cart=$course->courseName;
                          $order->payment_id=0;

                          $order->save();

            Session::flash('success', 'we will review the payment soon and we will send you a confirmation email .');

            return back();
        }

}
