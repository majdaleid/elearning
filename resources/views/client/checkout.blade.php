<!DOCTYPE html>
<html>

<head>
    <title>Laravel Stripe Payment Gateway Integrate Example</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title>@yield('title')</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    	<meta name="author" content="freehtml5.co" />


      	<!-- Facebook and Twitter integration -->
    	<meta property="og:title" content=""/>
    	<meta property="og:image" content=""/>
    	<meta property="og:url" content=""/>
    	<meta property="og:site_name" content=""/>
    	<meta property="og:description" content=""/>
    	<meta name="twitter:title" content="" />
    	<meta name="twitter:image" content="" />
    	<meta name="twitter:url" content="" />
    	<meta name="twitter:card" content="" />

    	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
      <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    	<!-- Animate.css -->
    	<link rel="stylesheet" href="/frontend/css/animate.css">
    	<!-- Icomoon Icon Fonts-->
    	<link rel="stylesheet" href="/frontend/css/icomoon.css">
    	<!-- Bootstrap  -->
    	<link rel="stylesheet" href="/frontend/css/bootstrap.css">

    	<!-- Magnific Popup -->
    	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">

    	<!-- Owl Carousel  -->
    	<link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    	<link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">

    	<!-- Theme style  -->
    	<link rel="stylesheet" href="/frontend/css/style.css">

    	<!-- Modernizr JS -->
    	<script src="/frontend/js/modernizr-2.6.2.min.js"></script>
    	<!-- FOR IE9 below -->
    	<!--[if lt IE 9]>
    	<script src="js/respond.min.js"></script>
    	<![endif]-->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="frontendCardCheckout/css/open-iconic-bootstrap.min.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/animate.css">

   <link rel="stylesheet" href="frontendCardCheckout/css/owl.carousel.min.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/owl.theme.default.min.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/magnific-popup.css">

   <link rel="stylesheet" href="frontendCardCheckout/css/aos.css">

   <link rel="stylesheet" href="frontendCardCheckout/css/ionicons.min.css">

   <link rel="stylesheet" href="frontendCardCheckout/css/bootstrap-datepicker.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/jquery.timepicker.css">


   <link rel="stylesheet" href="frontendCardCheckout/css/flaticon.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/icomoon.css">
   <link rel="stylesheet" href="frontendCardCheckout/css/style.css">
   <link rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

   <style media="screen">
   body{
     font-family: "Poppins", Arial, sans-serif;
       background: #fff;
       font-size: 15px;
       line-height: 1.8;
       font-weight: 400;
   }
   input[type=text] {
     width: 100%;
     margin-bottom: 20px;
     padding: 12px;
     border: 1px solid #ccc;
     border-radius: 3px;
   }
   button, input {
       overflow: visible;
   }
   input, button, select, optgroup, textarea {
       margin: 0;
       font-family: inherit;
       font-size: inherit;
       line-height: inherit;
   }
   .col-25, .col-50, .col-75 {
       padding: 0 16px;
   }
   .btn.btn-primary:hover {
       border: 1px solid #82ae46;
       background: transparent;
       color: #82ae46;
   }
   .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
   }
   .cart-detail .btn-primary {
       display: block;
       width: 100%;
   }
   .billing-form label {
       color: #000000;
       font-size: 14px;
         font-family: "Poppins", Arial;
         font-weight: 400;
   }
   h1, h2, h3, h4, h5, .h1, .h2, .h3, .h4, .h5 {
       line-height: 1.5;
       font-weight: 400;
       color: #000000;
       font-family: "Poppins", Arial, sans-serif;
       font-size: 1.75rem;
           margin-bottom: 0.5rem;
         }
   </style>

   <style>
   /*body {
       min-height: 100vh;
       display: flex;
       align-items: center;
       justify-content: center;
       background-color: rgb(0, 0, 34);
       font-size: 0.8rem
   }*/

   .card {
       max-width: 1000px;
       margin: 2vh
   }

   .card-top {
       padding: 0.7rem 5rem
   }

   .card-top a {
       float: left;
       margin-top: 0.7rem
   }

   #logo {
       font-family: 'Dancing Script';
       font-weight: bold;
       font-size: 1.6rem
   }

   .card-body {
       padding: 0 5rem 5rem 5rem;
       background-image: url("https://i.imgur.com/4bg1e6u.jpg");
       background-size: cover;
       background-repeat: no-repeat
   }

   @media(max-width:768px) {
       .card-body {
           padding: 0 1rem 1rem 1rem;
           background-image: url("https://i.imgur.com/4bg1e6u.jpg");
           background-size: cover;
           background-repeat: no-repeat
       }

       .card-top {
           padding: 0.7rem 1rem
       }
   }

   .row {
       margin: 0
   }

   .upper {
       padding: 1rem 0;
       justify-content: space-evenly
   }

   #three {
       border-radius: 1rem;
       width: 22px;
       height: 22px;
       margin-right: 3px;
       border: 1px solid blue;
       text-align: center;
       display: inline-block
   }

   #payment {
       margin: 0;
       color: blue
   }

   .icons {
       margin-left: auto
   }

   form span {
       color: rgb(179, 179, 179)
   }

   form {
       padding: 2vh 0
   }

   input {
       border: 1px solid rgba(0, 0, 0, 0.137);
       padding: 1vh;
       margin-bottom: 4vh;
       outline: none;
       width: 100%;
       background-color: rgb(247, 247, 247)
   }

   input:focus::-webkit-input-placeholder {
       color: transparent
   }

   .header {
       font-size: 1.5rem
   }

   .left {
       background-color: #ffffff;
       padding: 2vh
   }

   .left img {
       width: 2rem
   }

   .left .col-4 {
       padding-left: 0
   }

   .right .item {
       padding: 0.3rem 0
   }

   .right {
       background-color: #ffffff;
       padding: 2vh
   }

   .col-8 {
       padding: 0 1vh
   }

   .lower {
       line-height: 2
   }

   .btn {
       background-color: rgb(23, 4, 189);
       border-color: rgb(23, 4, 189);
       color: white;
       width: 100%;
       font-size: 0.7rem;
       margin: 4vh 0 1.5vh 0;
       padding: 1.5vh;
       border-radius: 0
   }

   .btn:focus {
       box-shadow: none;
       outline: none;
       box-shadow: none;
       color: white;
       -webkit-box-shadow: none;
       -webkit-user-select: none;
       transition: none
   }

   .btn:hover {
       color: white
   }

   a {
       color: black
   }

   a:hover {
       color: black;
       text-decoration: none
   }

   input[type=checkbox] {
       width: unset;
       margin-bottom: unset
   }

   #cvv {
       background-image: linear-gradient(to left, rgba(255, 255, 255, 0.575), rgba(255, 255, 255, 0.541)), url("https://img.icons8.com/material-outlined/24/000000/help.png");
       background-repeat: no-repeat;
       background-position-x: 95%;
       background-position-y: center
   }

   #cvv:hover {}
   </style>
</head>
<!-- navigation bar -->



<!-- end of navigation bar -->
<body>


  <div class="container" class="card">
      <div class="card-top border-bottom text-center"> <a href="#"> Back to shop</a> <span id="logo">BBBootstrap.com</span> </div>
      <div class="card-body">
          <div class="row upper"> <span><i class="fa fa-check-circle-o"></i> Shopping bag</span> <span><i class="fa fa-check-circle-o"></i> Order details</span> <span id="payment"><span id="three">3</span>Payment</span> </div>
          <div class="row">
              <div class="col-md-7">
                  <div class="left border">
                      <div class="row"> <span class="header">Payment</span>
                          <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                      </div>
                      @if (Session::has('success'))
                      <div class="alert alert-primary text-center">
                          <p>{{ Session::get('success') }}</p>
                      </div>
                      @endif
                      <form role="form" action="{{ route('make-payment') }}" method="post" class="stripe-payment"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="stripe-payment">
                             @csrf
                             <div class='form-row row'>
                                      <div class='col-xs-12 form-group required'>
                                          <label class='control-label'>Name on Card</label> <input class='form-control'
                                              size='4' type='text'>
                                      </div>
                                  </div>

                                  <div class='form-row row'>
                                      <div class='col-xs-12 form-group card required'>
                                          <label class='control-label'>Card Number</label> <input autocomplete='off'
                                              class='form-control card-num' size='20' type='text'>
                                      </div>
                                  </div>

                                  <div class='form-row row'>
                                      <div class='col-xs-12 col-md-4 form-group cvc required'>
                                          <label class='control-label'>CVC</label>
                                          <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                              size='4' type='text'>
                                      </div>
                                      <div class='col-xs-12 col-md-4 form-group expiration required'>
                                          <label class='control-label'>Expiration Month</label> <input
                                              class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                      </div>
                                      <div class='col-xs-12 col-md-4 form-group expiration required'>
                                          <label class='control-label'>Expiration Year</label> <input
                                              class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                      </div>
                                  </div>

                                  <div class='form-row row'>
                                      <div class='col-md-12 hide error form-group'>
                                          <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <button class="btn btn-success btn-lg btn-block" type="submit">Place an order</button>
                                  </div>

                              </form>

<h3 style="text-align: center;">OR Pay with Paypal</h3>
                              <div class="panel panel-default" style="margin-top: 60px;">

                                  @if ($message = Session::get('success'))
                                  <div class="custom-alerts alert alert-success fade in">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                      {!! $message !!}
                                  </div>
                                  <?php Session::forget('success');?>
                                  @endif

                                  @if ($message = Session::get('error'))
                                  <div class="custom-alerts alert alert-danger fade in">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                      {!! $message !!}
                                  </div>
                                  <?php Session::forget('error');?>
                                  @endif
                                  <div class="panel-heading"><b>Paywith Paypal</b></div>
                                  <div class="panel-body">
                                      <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}" >
                                          {{ csrf_field() }}

                                          <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                              <label for="amount" class="col-md-4 control-label">Enter Amount</label>

                                              <div class="col-md-6">
                                                  <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>

                                                  @if ($errors->has('amount'))
                                                      <span class="help-block">
                                                          <strong>{{ $errors->first('amount') }}</strong>
                                                      </span>
                                                  @endif
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <div class="col-md-6 col-md-offset-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      Paywith Paypal
                                                  </button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>











                  </div>
              </div>
              <div class="col-md-5">
                  <div class="right border">
                      <div class="header">Order Summary</div>
                      <p>2 items</p>
                      <div class="row item">
                          <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/79M6pU0.png"></div>
                          <div class="col-8">
                              <div class="row"><b>$ 26.99</b></div>
                              <div class="row text-muted">Be Legandary Lipstick-Nude rose</div>
                              <div class="row">Qty:1</div>
                          </div>
                      </div>
                      <div class="row item">
                          <div class="col-4 align-self-center"><img class="img-fluid" src="https://i.imgur.com/Ew8NzKr.jpg"></div>
                          <div class="col-8">
                              <div class="row"><b>$ 19.99</b></div>
                              <div class="row text-muted">Be Legandary Lipstick-Sheer Navy Cream</div>
                              <div class="row">Qty:1</div>
                          </div>
                      </div>
                      <hr>
                      <div class="row lower">
                          <div class="col text-left">Subtotal</div>
                          <div class="col text-right">$ 46.98</div>
                      </div>
                      <div class="row lower">
                          <div class="col text-left">Delivery</div>
                          <div class="col text-right">Free</div>
                      </div>
                      <div class="row lower">
                          <div class="col text-left"><b>Total to pay</b></div>
                          <div class="col text-right"><b>$ 46.98</b></div>
                      </div>
                      <div class="row lower">
                          <div class="col text-left"><a href="#"><u>Add promo code</u></a></div>
                      </div> <button class="btn">Place order</button>
                      <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                  </div>
              </div>
          </div>
      </div>
      <div> </div>
  </div>

























hierrrrrrrrrrrrrrrrrrrrrr
    <div class=""style="padding:13%;">
        <div class="row mt-5 pt-3">
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @if (Session::has('success'))
                        <div class="alert alert-primary text-center">
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif
                        <h3 style="background-color:green;">ip testing :are you from {{$country}}</h3>

                        <form role="form" action="{{ route('make-payment') }}" method="post" class="stripe-payment"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="stripe-payment">
                            @csrf

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-num' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                        size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 hide error form-group'>
                                    <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                </div>
                            </div>

                            <div class="row">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Place an order</button>
                            </div>

                        </form>





                    </div>
                </div>
            </div>

            <div class="col-xl-5">
          	          <div class="">
          	          	<div class="col-md-12 d-flex mb-5">
          	          		<div class="cart-detail cart-total p-3 p-md-4">
          	          			<h3 class="billing-heading mb-4">Cart Total</h3>
          	          			<p class="d-flex">
          		    						<span>Subtotal</span>
          		    						<span>$50</span>
          		    					</p>
          		    					<p class="d-flex">
          		    						<span>Delivery</span>
          		    						<span>$0.00</span>
          		    					</p>
          		    					<p class="d-flex">
          		    						<span>Discount</span>
          		    						<span>$0.00</span>
          		    					</p>
          		    					<hr>
          		    					<p class="d-flex total-price">
          		    						<span>Total</span>
          		    						<span>$50.00</span>
          		    					</p>
          								</div>
          	          	</div>
          	          	<div class="col-md-12">
                          <div class="cart-detail p-3 p-md-4">
                                          <h3 class=" ">Payment Method</h3>
Credit card ,Master card

                                        </div>
                                      </div>
          								</div>
          	          	</div>







        </div>
    </div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });

</script>

</html>
