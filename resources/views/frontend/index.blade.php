    @extends('frontend_template')
@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero">


    <div class="hero-container">
     
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          
 @foreach($sliders as $slider)


          <!-- Slide 1 -->
          <div class="carousel-item @if ($loop->first) active @endif
" style="background: url({{$slider->photo}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><!-- Welcome to <span>Durma</span> -->{{$slider->name}}</h2>
                <p class="animate__animated animate__fadeInUp">{{$slider->subject}}</p>
                
              </div>
            </div>
          </div>



    @endforeach

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

    </div>

         
  </section><!-- End Hero -->




  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row box">
          <div class="col-lg-4">
            <div class="icon-box">
                <i class="icofont-book"></i>
                <h5>Special Only Class</h5>
                <a href="booklatestnew.html">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
                <i class="icofont-book"></i>
                <h5>Regular Class</h5>
                <a href="{{route('regularclass')}}">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
                <i class="icofont-book"></i>
                <h5>Online Class</h5>
                <a href="{{route('onlineclass')}}">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <section class="home-nclass">
      <div class="container">
        <div class="row tt">
      
        
   <div class="row content table-responsive" data-aos="fade-up">
          <div class="container mt-2">
            <div class="section-title" data-aos="fade-up">
          <h2>ထပ်မံဖွင့်လှစ်မည့် ဂျပန်ဘာသာတန်းခွဲသစ်များ</h2>
          

        </div>

      

                


            <div class="bd-example">
              <table class="table table-bordered table-hover ">
                  <thead>
                <tr>
                  <th scope="col">CLASS</th>
                  <th scope="col">STARTING</th>
                  <th scope="col">DAYS</th>
                  <th scope="col">TIME</th>
                  <th scope="col">DURATION</th>
                  <th scope="col">FEE</th>
                </tr>
              </thead>
              <tbody>
                   @foreach($timetables as $timetable)
                <tr>
                  <th scope="row">{{$timetable->name}}</th>
                  <td>{{$timetable->start_date}}</td>
                  <td>
                    @foreach($timetable->days as $day)
                    {{ $loop->first ? '' : ', ' }}
                      {{$day->name}}

                    @endforeach
                  </td>
                  <td>{{$timetable->start_time}} ~ {{$timetable->end_time}}</td>
                  <td >
                    {{$timetable->duration}}
                  </td>
                 <td>{{$timetable->fees}}</td>
                </tr>
                @endforeach
              </tbody>

              </table>
            </div>
          </div>
          <div class="col-lg-12 col-12">
            <p><b>
              ### ဖတ်စာအုပ်၊စာရွက်စာတမ်းကြေး အပြီးအစီးဖြစ်ပါသည်။</b>
            </p>
            <!-- <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->
          </div>
          
        </div>
        </div>
      </div>
    </section>

    

    <section id="featured" class="featured">
        <div class="container home-lnew">
            <button type="button" class="btn btn-danger nclass">အသစ်ထွက်ရှိပြီးသောစာအုပ်များ</button>


            <div class="row">

 @foreach($books as $book)
              <div class="col-lg-4 col-md-12 col-12 "> 
        <section class=" wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
          <div class="col">
                   <div class="product-card">
        <div class="badge">New</div>
        <div class="product-tumb">

           <div class="hover14 ">
            <figure>
            <img src="{{$book->photo}}" class=" img-responsive img-fluid" alt="..." >
            </figure>
          </div>
        </div>
        <div class="product-details">
            <span class="product-catagory">Latest New</span>
            <h5>{{$book->name}}</h5>
          
            <div class="product-bottom-details">
                <div class="product-price">{{$book->fee}}</div>
                <div class="product-links">
                     <a href="{{route('latestnew',$book->id)}}">  Read More</a>
                </div>
            </div>
        </div>
    </div>
                  </div>
        </section>
    </div>


@endforeach


                  
    







            </div>

    <div class="clear"></div>
        </div>
    </section>



    <section id="testimonials" class="testimonials home-other">
      <div class="container">
            <div class="section-title" data-aos="fade-up">
          <h2><i>Other</i></h2>
          

        </div>


                <div class="row row-cols-1 row-cols-md-3 g-4">

                 
          @foreach($journalvideos as $journalvideo)


                    <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">



                   <div class="carde">
    <div class="img-cover"><img src="{{$journalvideo->photo}}"></div>
    
    <div class="desc">
      <h5>{{$journalvideo->name}}</h5>
      <p></p>
      <a href ="{{route('books',$journalvideo->id)}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
  
  

                  
                  </div>
                </section>


@endforeach




   
              </div>
                    
      
           

   <div class="clear"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
 <div class="clear"></div>
  <!-- ======= Footer ======= -->
  <script type="text/javascript">
    (function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();

</script>
@endsection