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
                <p class="animate__animated animate__fadeInUp">{!!$slider->subject!!}</p>
                
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
                <a href="{{route('specialclass')}}">Read More</a>
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
                   @if($timetable->status ==2)
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
                @endif
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

    

    <section id="featured" class="featured ">
        <div class="container home-lnew">
            <button type="button" class="btn btn-danger nclass">အသစ်ထွက်ရှိပြီးသောစာအုပ်များ</button>


            <div class="row">

 @foreach($books as $book)
              <div class="col-lg-4 col-md-12 col-12 "> 
        <section class=""   data-aos="fade-down"  data-aos-easing="linear"
     data-aos-duration="500" >
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



    <section id="testimonials" class="testimonials home-other " >
      <div class="container">
            <div class="section-title" >
          <h2><i>Other</i></h2>
          

        </div>


                <div class="row row-cols-1 row-cols-md-3 g-4" data-aos="fade-right"  data-aos-offset="200"
     data-aos-easing="ease-in-sine" >

                 
          @foreach($journalvideos as $journalvideo)


                    <section class="" data-aos="flip-left">
                    <div class="col-lg-4 col-12 my-3">



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

@endsection
