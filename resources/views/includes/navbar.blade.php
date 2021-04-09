<nav class="fh5co-nav" role="navigation">
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-right">
          <p class="num">Call: +01 123 456 7890</p>
          <ul class="fh5co-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-dribbble"></i></a></li>
            <li><a href="#"><i class="icon-github"></i></a></li>
            <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

            <li><a href="{{ url('locale/ar') }}" ><i class="fa fa-language"></i> ar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
          <div id="fh5co-logo"><a href="index">Learn<span>.</span></a></div>
        </div>
        <div class="col-xs-11 text-right menu-1">
          <ul>
            <li class="active">
                <a href="home">
              {{__('home.home')}}
            </a>
          </li>
            <li>

                    <a href="allcourses">
                {{__('home.courses')}}
              </a>
            </li>
            <li>
              <a href="pricing">
                {{__('home.pricing')}}
              </a>
            </li>
            <li class="has-dropdown">
              <a href="blog">
                {{__('home.blog')}}
              </a>

            </li>
            <li><a href="contact">{{__('home.contact')}}</a></li>


           @if(Auth::user())
            <li class="has-dropdown">
              <a href="#">
              {{ Auth::user()->name }}
              </a>



              <ul class="dropdown">
                <li><a href="user/profile">Profile</a></li>
                <li><a href="/logout">Log Out</a></li>
              </ul>
            </li>
              @else
              <a href="login">
                <span>{{__('home.login')}}</span>
              </a>
              @endif




            </li>
              @if(!Auth::user())
            <li class="btn-cta"><a href="register"><span>{{__('home.register')}}</span></a></li>
            @endif


          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>
