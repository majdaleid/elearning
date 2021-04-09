<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use App\Models\Order;
use Session;
use Stripe\Charge;
use DB;
class PaymentController extends Controller
{
  public function checkout()
    {
    //  $geoipInfo=geoip()->getLocation($_SERVER['REMOTE_ADDR']);
         $geoipInfo=geoip()->getLocation('91.66.3.145');
       //return $geoipInfo->toArray();
       $country1=$geoipInfo->country;
      // return $geoipInfo->country;
        return view('client.checkout')->with('country',$country1);
    }

    public function makePayment(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        //Stripe\Charge::create ([
            $charge=Stripe\Charge::create ([
                "amount" => 60 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill."
        ]);

        $order=new Order();
                    //  $order->name=$request->input('fullname2');
                    //  $order->address=$request->input('address2');
  $order->name="majd";
    $order->address="huhu firedastrße22 asdsad";
                      //$order->cart=serialize($cart);
                      $order->cart="english course";
                      $order->payment_id=$charge->id;

                      $order->save();

        Session::flash('success', 'Payment successfully made.');

        return back();
    }

    public function orders(){
          $orders=Order::get();

         
            return view('admin.orders')->with('orders',$orders);
        }

}
