@extends('layouts.app2')
@section('title')
pricing
@endsection
@section('content')

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(frontend/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Pricing Plan</h1>
							<h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



<!--
hierrrrrrrrrrrrrrrrrrrrrr

huhuhuh
<div class="container">
	<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h3 class="text-center" style="margin-top: 30px;">How to integrate paypal payment in Laravel - websolutionstuff.com</h3>
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
</div>

-->

	<div id="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">$</sup>50<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="http://localhost:8000/checkout" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
