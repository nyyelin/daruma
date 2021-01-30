    @extends('frontend_template')
@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
{{asset('frontend/')}}
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{asset('frontend/assets/img/slide/slide-1.jpg')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Durma</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url({{asset('frontend/assets/img/slide/slide-2.jpg')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Lorem <span>Su Myanmar</span></h2>
                <p class="" ass="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url({{asset('frontend/assets/img/slide/slide-3.jpg')}})">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea <span>Durma</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                
              </div>
            </div>
          </div>

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
                <tr>
                  <th scope="row">Basic I (N5)</th>
                  <td>24.3.2020</td>
                  <td>Mon, Tue, Wed</td>
                  <td>13:00~15:00</td>
                  <td>3 Months</td>
                  <td>120,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Basic I (N5)</th>
                  <td>24.3.2020</td>
                  <td>Sunday Only</td>
                  <td>13:00~15:00</td>
                  <td>4 Months</td>
                  <td>120,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Basic I (N5)</th>
                  <td>24.3.2020</td>
                  <td>Sat, Sun</td>
                  <td>13:00~15:00</td>
                  <td>4 Months</td>
                  <td>120,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Basic II (N4)</th>
                  <td>24.3.2020</td>
                  <td>Mon, Tue, Web</td>
                  <td>13:00~15:00</td>
                  <td>3 Months</td>
                  <td>150,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Basic II (N4)</th>
                  <td>24.3.2020</td>
                  <td>Sat, Sun</td>
                  <td>13:00~15:00</td>
                  <td> 3 Months</td>
                  <td>150,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Intermediate I (N3)</th>
                  <td>24.3.2020</td>
                  <td>Sinday Only</td>
                  <td>13:00~15:00</td>
                  <td>4 Months</td>
                  <td>200,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Intermediate I (N3)</th>
                  <td>@4.3.2020</td>
                  <td colspan="2">Special Only Class</td>
                  <td>3 Months</td>
                  <td>200,000Ks</td>
                </tr>
                <tr>
                  <th scope="row">Intermediate II (N3)</th>
                  <td>24.3.2020</td>
                  <td colspan="2">Special Only Class</td>
                  <td>4 Months</td>
                  <td>200,000Ks</td>
                </tr>
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


              <div class="col-lg-4 col-md-12 col-12 "> 
        <section class=" wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
          <div class="col">
                   <div class="product-card">
        <div class="badge">New</div>
        <div class="product-tumb">

           <div class="hover14 ">
            <figure>
            <img src="{{asset('frontend/assets/img/book3.png')}}" class=" img-responsive img-fluid" alt="..." >
            </figure>
          </div>
        </div>
        <div class="product-details">
            <span class="product-catagory">Latest New</span>
            <h5>N1 Grammer</h5>
          
            <div class="product-bottom-details">
                <div class="product-price">5,000 MMK</div>
                <div class="product-links">
                     <a href="{{route('latestnew')}}">  Read More</a>
                </div>
            </div>
        </div>
    </div>
                  </div>
        </section>
    </div>

                  

<div class="col-lg-4 col-md-12 col-12  end"> 
        <section class=" wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;"> <div class="col ">
                      <div class="product-card">
        <div class="badge"></div>
        <div class="product-tumb">
           <div class="hover14 ">
            <figure>
            <img src="{{asset('frontend/assets/img/book3.png')}}" class=" img-responsive img-fluid" alt="..." >
            </figure>
          </div>
        </div>
        <div class="product-details">
            <span class="product-catagory">Latest New</span>
          <h5>N1 Grammer</h5>
          
            <div class="product-bottom-details">
                <div class="product-price">5,000 MMK</div>
                <div class="product-links">
                   <a href="{{route('latestnew')}}">  Read More</a>
                </div>
            </div>
        </div>
    </div>
                  </div>
                </section>     
    </div>

                 


<div class="col-lg-4 col-md-12 col-12 "> 
        <section class=" wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"><div class="col ">
                       <div class="product-card">
        <div class="badge"></div>
        <div class="product-tumb">
            <div class="hover14 ">
            <figure>
            <img src="{{asset('frontend/assets/img/book3.png')}}" class=" img-responsive img-fluid" alt="..." >
            </figure>
          </div>
        </div>
        <div class="product-details">
            <span class="product-catagory">Latest New</span>
             <h5>N1 Grammer</h5>
          
            <div class="product-bottom-details">
                <div class="product-price">5,000 MMK</div>
                <div class="product-links">
                    
                  <a href="{{route('latestnew')}}">  Read More</a>
                </div>
            </div>
        </div>
    </div>
                  </div>

</section>     
    </div>
                  





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

                 
         


                    <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">



                   <div class="carde">
    <div class="img-cover"><img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}"></div>
    
    <div class="desc">
      <h5>ထုတ်ဝေပြီးသော စာအုပ်များ</h5>
      <p></p>
      <a href ="{{route('books')}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
  
  

                  
                  </div>
                </section>




                <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">

                                       <div class="carde">
    <div class="img-cover"><img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}"></div>
    
    <div class="desc">
      <h5>Japan_Myanmar Days</h5>
      <p></p>
      <a href ="{{route('japanmyanmarday')}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
                    </div>
                 
                </section>



                                <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">
                                         <div class="carde">
    <div class="img-cover"><img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}"></div>
    
    <div class="desc">
      <h5>ဗဟုသုတဆောင်းပါးများ</h5>
      <p></p>
      <a href ="{{route('generaljournal')}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
                </div>
              </section>
   
              </div>
                    
      
                <div class="row row-cols-1 row-cols-md-3 g-4" >

                   <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">
                                                                <div class="carde">
    <div class="img-cover"><img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}"></div>
    
    <div class="desc">
      <h5>Knowledge Video</h5>
      <p></p>
      <a href ="{{route('knowledgevideo')}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
                    </div>
                  </section>


                   <section class="wow fadeInDown" data-wow-duration="2s">
                    <div class="col my-3">
                                           <div class="carde">
    <div class="img-cover"><img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}"></div>
    
    <div class="desc">
      <h5>Reading Story</h5>
      <p></p>
      <a href ="{{route('readingstory')}}">Read More </a>
      <br>
      <br>
    </div>
  </div>
                    </div>
                  </section>


     
                </div>
                

   <div class="clear"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
 <div class="clear"></div>
  <!-- ======= Footer ======= -->
@endsection