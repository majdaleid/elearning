@extends('layouts.app2')
@section('title')
courses
@endsection
@section('content')

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(/frontend/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Courses</h1>
							<h2>Free html5 templates Made by <a href="http://freehtml5.co" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Take A Course</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</div>
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="/frontend/images/work_1.png" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>We Want You To Learn English</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>Far far away, behind the word</li>
								<li><i class="icon-check2"></i>There live the blind texts</li>
								<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="/frontend/images/work_1.png" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<div class="mt">
							<div>
								<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
							<div>
								<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-project">
		<div class="container-fluid proj-bottom">
			<div class="row">
				@foreach($courses as $course)
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="coursedetails/{{$course->id}}"><img src="/frontend/images/project-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>{{$course->courseName}} </h3>
						<span>View Course<a href="coursedetails/{{$course->id}}"></a></span>
					</a>
				</div>
        @endforeach



			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">
						<h4>We have coolest features of this course</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Great teachers that we have</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Steps by steps turorial session</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">Create A Free Course</a></p>
				</div>
			</div>
		</div>
	</div>
@endsection
