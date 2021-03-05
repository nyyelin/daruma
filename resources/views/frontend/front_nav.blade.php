  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGMGLHTkCxVVnKDgMMQspNdLPPzkcbrKRFxRzJgrhgLNMTHbWfRvnjDBxZlCpnwsGXFddGd" target="_blank">darumajls@gmail.com</a>
      <!--   mailto:darumajls@gmail.com -->
        <i class="icofont-phone"></i> 09 45678 0091 , 09 45678 0092
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-youtube"></i></a>
        <a href="https://www.facebook.com/DARUMAJapaneseLanguageSchool" class="facebook " target="_blank"><i class="icofont-facebook"></i></a>
      
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
            <a href="{{route('main')}}"><img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="" class="img-fluid img-responsive"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('main')}}">Home</a></li>
          <li class="{{ Request::is('About_Us') ? 'active' : '' }}"><a href="{{route('about')}}">About Us</a></li>
          <li class="{{ Request::is('Gallery_Class') ? 'active' : '' }}"><a href="{{route('gallery')}}">Gallery</a></li>
          <li class="drop-down {{ Request::segment(1) === 'Our_Class' || Request::segment(1) === 'Our_Video' || Request::segment(1) === 'Review' ? 'active' : '' }}"><a href="">More</a>
            <ul>
              <li><a href="{{route('class')}}">Our Class</a></li>
              <li><a href="{{route('testingpage')}}">Our Video</a></li>
              <li><a href="{{route('review')}}">Review</a></li>
            </ul>
          </li>
          <li class="{{ Request::is('Our_Contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
          @if(Auth::user())

          <li class="drop-down">
            <a href="javascript:void(0)">{{Auth::user()->name}}</a>
              
              <ul>
                @role('student')
                <li>
                  <a class="dropdown-item" href="{{route('information')}}"><i class="icofont-street-view"></i> Profile</a>

                </li>
                @endrole
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                  <i class="icofont-exit"></i>
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
               
               </li>
            </ul>
        </li>
          @else
          
          <li class="{{ Request::segment(1) === 'login' || Request::segment(1) === 'Admin/login'  ? 'active' : '' }}"><a href="{{url('/login')}}">Log In</a></li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->