<style>
.page-wraper{
  display:flex;
}
.section-sp1{
  backgroud-color:dodgerblue;
  width:50%;
  height:50%;
}

/* course detail bx */

#box-container{

display:flex;

justify-content: center;
    flex-wrap: wrap;
}
#box-1{
/*background-color:dodgerblue;*/
/*width:50%;
height:50%;*/
width:57%;
}

#box-2{
/*background-color:orangered;*/
/*width:50%;
height:50%;*/
display:flex;
}

.course-detail-bx{
	padding:20px;
	border:1px solid rgba(0,0,0,0.1);
	position: sticky;
	top: 100px;
}
.course-price{
	text-align:center;
	padding: 10px 0 20px;
}
.course-price .price,
.course-price del{
	display:inline-block;
}
.course-price .price{
	font-size:35px;
	margin:0;
}
.teacher-info{
	display:flex;
	align-items: center;
}
.course-price del{
	margin: 0;
}
.teacher-bx{
	border: 1px solid rgba(0,0,0,0.1);
	padding: 10px 20px;
	margin: 20px -20px 0;
	border-width: 1px 0 1px 0;
}
.teacher-name h5{
	font-size:16px;
	margin-bottom: 0;
	line-height: 18px;
	font-weight:400;
	color:#000;
}
.teacher-thumb{
	width:55px;
	height:55px;
	overflow:hidden;
	border-radius:55px;
	margin-right:15px;
}
.teacher-name span{
	font-size:13px;
	color:#6a6a6a;
}
.course-detail-bx .cours-more-info .price span {
    font-size: 12px;
    color: #3c3c3c;
}
.course-detail-bx .cours-more-info .price h5{
	font-size:16px;
	font-weight:400;
}
.course-detail-bx .cours-more-info {
    border-bottom: 1px solid #e6e6e6;
    display: flex;
    margin: 0;
    border-top: 0;
	margin: 0 -20px;
}
.course-detail-bx .cours-more-info .price, .cours-more-info .review {
    padding: 8px 20px;
}
.course-info-list{
	padding-top:20px;
	margin:0 -20px;
}
.course-info-list ul{
	list-style:none;
	margin:0;
	padding: 0;
}
.course-info-list ul li{
	display: block;
	width: 100%;
}
.course-info-list ul li a{
	padding: 8px 20px;
	font-size: 15px;
	color: #808080;
	display: flex;
	align-items: center;
	transition:all 0.5s;
	-moz-transition:all 0.5s;
	-webkit-transition:all 0.5s;
	-ms-transition:all 0.5s;
	-o-transition:all 0.5s;
}
.course-info-list ul li a.active,
.course-info-list ul li a:hover{
	color:#fff;
	background: var(--primary);
}
.course-info-list ul li a i{
	margin-right:10px;
	font-size:20px;
}
.courses-post .post-title{
	font-size:35px;
	font-weight:500;
}
.post-title{
  margin-top: 3%;
}
.course-features{
	margin:0;
	margin-bottom: 30px;
	padding:0;
	list-style:none;
	position:sticky;
	top:80px;
}
.course-features li{
	padding:15px 20px;
	border-bottom:1px solid rgba(0,0,0,0.1);
	display:flex;
	font-size:14px;
	align-items: center;
}
.course-features li i{
	margin-right:10px;
	font-size:16px;
	color:var(--primary);
}
.course-features li .label{
	width:60%;
}
.course-features li .value{
	width:40%;
}
.curriculum-list ul li,
.curriculum-list{
	margin:0;
	padding:0;
	list-style:none;
}
.curriculum-list ul li{
	display: flex;
	justify-content: space-between;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	padding: 10px 20px;
	font-size: 15px;
}
.curriculum-list > li{
	margin-bottom:30px;
}
.curriculum-list h5{
	font-size: 14px;
	font-weight: 500;
	color:var(--primary);
	margin-bottom: 0px;
	text-transform: uppercase;
}
.instructor-bx{
	display:flex;
	align-items: start;
	border: 1px solid rgba(0,0,0,0.1);
	padding: 20px 20px;
	margin-bottom:30px;
}
.instructor-author{
	width: 85px;
	height: 85px;
	overflow: hidden;
	border-radius: 55px;
	margin-right: 15px;
	min-width: 85px;
}
.instructor-info h6{
	margin-bottom:0;
}
.instructor-info p,
.instructor-info span{
	font-size:14px;
	line-height:22px;
}
.review-bx {
	display: flex;
	align-items: center;
	padding: 20px 20px;
	border: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 30px;
}
.all-review{
	width: 25%;
	text-align: center;
	margin-right: 20px;
	border: 1px solid rgba(0,0,0,0.1);
	padding: 10px 10px;
}
.all-review .rating-type{
	margin:0;
	font-size: 35px;
	line-height: 40px;
}
.all-review span{
	font-size:14px;
}
.review-bar{
	width:75%;
}
.bar-bx {
    display: flex;
    width: 100%;
    align-items: center;
	font-size: 14px;
	font-weight: 400;
	color: #000;
}
.bar-bx .middle{
	width:80%;
}
.bar-bx .side{
	width:10%;
}
.bar-bx .side.right{
	text-align:right;
}
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}
.bar-container [class*="bar"]{
	height:8px;
	background:var(--primary);
}
/*mobiles*/
@media screen  and (max-device-width: 480px) {
  body {background:red;}
  #box-2{order:-1;}
  #courseimage {
    margin-left:-17px;
  }
  img {
    margin-left: -30%;
    width: 154%;
    margin-top: 10%;
  }
  .post-title{
    margin-top: 15%;
  }
}

/*tablet*/
@media (min-width: 481px) and (max-width: 767px) {



 #box-container {
  display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    flex-direction: column-reverse;
  }
  #box-2{
    padding-left:27%;
  }
  #overview{
    padding-left:20%;
  }
  #curriculum{
    padding-left:20%;
  }
  #instructor{
    padding-left:20%;
  }
.col-md-12 col-lg-8{
  padding-left: 10%;
}
.ttr-post-text{
  padding-left:10%;
}
}

</style>
@extends('layouts.app2')
@section('title')
contact
@endsection
@section('content')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/frontend/images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>The Art of Teaching is the Art of Assisting Discovery</h1>
						<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
						<p><a class="btn btn-primary btn-lg btn-learn" href="#">Take A Course</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
 &nbsp;
<div id="box-container">
<div id="box-1">
    <div class="courses-post">
              <div class="ttr-post-media media-effect">
                <a href="#">
                  <!--<img src="/frontend/coursedetails/assets/images/blog/default/thum1.jpg" alt=""> -->
                  <img id="courseimage"  src="{{ asset('storage/courseImages/'.$course->courseImage) }}" alt="" style="width:72%;">
                </a>
              </div>
              <div class="ttr-post-info">
                <div class="ttr-post-title ">
                  <h2 class="post-title">{{$course->courseName}}</h2>
                </div>
                <div class="ttr-post-text">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
              </div>
            </div>
            <div class="courese-overview" id="overview">
              <h4>Overview</h4>
              <div class="row">
                <div class="col-md-12 col-lg-4">
                  <ul class="course-features">
                  <!--  <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
                    <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
                    <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
                    <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
                    <li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
                    <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li> -->
                  </ul>
                </div>
                <div class="col-md-12 col-lg-8">

               <h5 class="m-b5">Course Description</h5>
               <br/>
                 {!! $course->description2 !!}
                  <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  <h5 class="m-b5">Certification</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  <h5 class="m-b5">Learning Outcomes</h5>
                  <ul class="list-checked primary">
                    <li>Over 37 lectures and 55.5 hours of content!</li>
                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                    <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                    <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                    <li>Course content designed by considering current software testing technology and the job market.</li>
                    <li>Practical assignments at the end of every session.</li>
                    <li>Practical learning experience with live project work and examples.cv</li>
                  </ul>-->
                </div>
              </div>
            </div>
                            <div class="m-b30" id="curriculum">
              <h4>Curriculum</h4>
              <ul class="curriculum-list">
                <!--  <li>
                    <h5>First Level</h5>
                    <ul>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 1.</span> Introduction to UI Design
                        </div>
                        <span>120 minutes</span>
                      </li>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 2.</span> User Research and Design
                        </div>
                        <span>60 minutes</span>
                      </li>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 3.</span> Evaluating User Interfaces Part 1
                        </div>
                        <span>85 minutes</span>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <h5>Second Level</h5>
                    <ul>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 1.</span> Prototyping and Design
                        </div>
                        <span>110 minutes</span>
                      </li>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 2.</span> UI Design Capstone
                        </div>
                        <span>120 minutes</span>
                      </li>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Lesson 3.</span> Evaluating User Interfaces Part 2
                        </div>
                        <span>120 minutes</span>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <h5>Final</h5>
                    <ul>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Part 1.</span> Final Test
                        </div>
                        <span>120 minutes</span>
                      </li>
                      <li>
                        <div class="curriculum-list-box">
                          <span>Part 2.</span> Online Test
                        </div>
                        <span>120 minutes</span>
                      </li>
                    </ul>
                  </li>-->
                </ul>
            </div>
                          <div class="" id="instructor">
              <h4>Instructor</h4>
              <div class="instructor-bx">
                <div class="instructor-author">
                  <img  src="http://localhost/elearning/storage/app/public/teacherImages/{{$course->teacher->teacherImage}}"alt="">
                  <!--<img src="frontend/coursedetails/assets/images/testimonials/pic1.jpg" alt="">-->
                </div>
                <div class="instructor-info">
                  <h6>{{$course->teacher->teacherName }} </h6>
                  <span>Professor</span>
                  <ul class="list-inline m-tb10">
                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
            <!--      <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>-->
            <p class="m-b0"> {{$course->teacher->description }}</p>
                </div>
              </div>
              <!--
              <div class="instructor-bx">
                <div class="instructor-author">
                  <img src="assets/images/testimonials/pic2.jpg" alt="">
                </div>

                <div class="instructor-info">
                  <h6>Keny White </h6>
                  <span>Professor</span>
                  <ul class="list-inline m-tb10">
                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                </div>
              </div>-->
            </div>
            <!--
            <div class="" id="reviews">
              <h4>Reviews</h4>

              <div class="review-bx">
                <div class="all-review">
                  <h2 class="rating-type">3</h2>
                  <ul class="cours-star">
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>3 Rating</span>
                </div>
                <div class="review-bar">
                  <div class="bar-bx">
                    <div class="side">
                      <div>5 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5" style="width:90%;"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>150</div>
                    </div>
                  </div>
                  <div class="bar-bx">
                    <div class="side">
                      <div>4 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5" style="width:70%;"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>140</div>
                    </div>
                  </div>
                  <div class="bar-bx">
                    <div class="side">
                      <div>3 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5" style="width:50%;"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>120</div>
                    </div>
                  </div>
                  <div class="bar-bx">
                    <div class="side">
                      <div>2 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5" style="width:40%;"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>110</div>
                    </div>
                  </div>
                  <div class="bar-bx">
                    <div class="side">
                      <div>1 star</div>
                    </div>
                    <div class="middle">
                      <div class="bar-container">
                        <div class="bar-5" style="width:20%;"></div>
                      </div>
                    </div>
                    <div class="side right">
                      <div>80</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
-->

</div>
<div id="box-2">
            <div class="course-detail-bx">
              <div class="course-price">
                <del><!--$190--></del>
                <h4 class="price">${{$course->coursePrice}}</h4>
              </div>
              <div class="course-buy-now text-center">
                <a href="/checkout/{{$course->id}}" class="btn radius-xl text-uppercase">Buy Now This Courses</a>
              </div>
              <div class="teacher-bx">
                <div class="teacher-info">
                  <div class="teacher-thumb">
                    <img  src="http://localhost/elearning/storage/app/public/teacherImages/{{$course->teacher->teacherImage}}"alt="">
                    <!--<img src="/frontend/coursedetails/assets/images/testimonials/pic1.jpg" alt=""/>-->
                  </div>
                  <div class="teacher-name">
                    <h5>{{$course->teacher->teacherName }} </h5>
                    <span>Science Teacher</span>
                  </div>
                </div>
              </div>
          <!--    <div class="cours-more-info">
                <div class="review">
                  <span>3 Review</span>
                  <ul class="cours-star">
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li class="active"><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                </div>
          <div class="price categories">
                  <span>Categories</span>
                  <h5 class="text-primary">Frontend</h5>
                </div> -->
          <!--    </div> -->
              <div class="course-info-list scroll-page">
                <ul class="navbar">
                  <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                  <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a></li>
                  <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
                  <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                </ul>
              </div>
            </div>







</div>
</div>
<!--
<script src="/frontend/coursedetails/assets/js/jquery.min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="/frontend/coursedetails/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="/frontend/coursedetails/assets/vendors/counter/waypoints-min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/counter/counterup.min.js"></script>
<script src="/frontend/coursedetails/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="/frontend/coursedetails/assets/vendors/masonry/masonry.js"></script>
<script src="/frontend/coursedetails/assets/vendors/masonry/filter.js"></script>
<script src="/frontend/coursedetails/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="/frontend/coursedetails/assets/js/jquery.scroller.js"></script>
<script src="/frontend/coursedetails/assets/js/functions.js"></script>
<script src="/frontend/coursedetails/assets/js/contact.js"></script>
<script src="/frontend/coursedetails/assets/vendors/switcher/switcher.js"></script>
-->
  @endsection
