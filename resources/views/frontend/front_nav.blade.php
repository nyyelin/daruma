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
            <a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="" class="img-fluid img-responsive"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('home')}}">Home</a></li>
          <li class=""><a href="{{route('about')}}">About Us</a></li>
          <li class=""><a href="{{route('gallery')}}">Gallery</a></li>
          <li class="drop-down"><a href="">More</a>
            <ul>
              <li><a href="{{route('class')}}">Our Class</a></li>
              <li><a href="{{route('video')}}">Our Video</a></li>
              <li><a href="{{route('review')}}">Review</a></li>
            </ul>
          </li>
          <li><a href="{{route('contact')}}">Contact</a></li>

          <li><a href="{{url('/login')}}">Log In</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->