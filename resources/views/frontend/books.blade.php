<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!--   <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->


  <title>DARUMA Japanese Language School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/logo.jpg')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />
  <link href="http://mynameismatthieu.com/WOW/css/libs/animate.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 

<link rel="stylesheet" href="{{asset('frontend/vendors/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">


















</head>
<body>

 @include('frontend.front_nav')
   <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>{{$journalvideo->name}}</li>
        </ol>
        <h2>{{$journalvideo->name}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<div class="container">

    <div class="row">
      
    <!--================Blog Area =================-->
  <section class="blog_area">
      <div class="container">
          <div class="row">
       
              <div class="col-lg-8">
                   @foreach($addjournalvideos as $addjournalvideo)
                  <div class="blog_left_sidebar">
                      
                      <article class="row blog_item">
                        <!--   <div class="col-md-3">
                              
                          </div> -->
                          

                          <div class="col-md-9 mx-auto">
                              <div class="blog_post">
                                  <img src="{{$addjournalvideo->photo}}" alt="">
                                  <div class="blog_details">
                                      
                                          <h2>{{$addjournalvideo->header}}</h2>
                                      
                                      <p><i class="lnr lnr-user"></i> &nbsp;{{$addjournalvideo->auth_name}} &nbsp;&nbsp;  <i class="lnr lnr-calendar-full"></i>  &nbsp;{{$addjournalvideo->dob}}</p>
                                      <div class="" style="max-height: 140px;overflow: hidden; margin-top: -20px;" >
                                         <p style="margin-top: -10px;">{!!$addjournalvideo->subject!!}</p>
                                      </div>
                                     <br>
                                      <a class="button button-blog" href="{{route('detailbooks',$addjournalvideo->id)}}">View More</a>
                                  </div>
                              </div>
                          </div>
                     
                      </article>





                   
                     
                   
             
                  </div>

       @endforeach
       <br>
       <div class="" style="margin-left: 170px;">
         {!!$addjournalvideos->links()!!}
       </div>
       
              </div>

                        
     
              <div class="col-lg-4 my-1">
                  <div class="blog_right_sidebar ">
                     
                      
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Popular Posts</h3>
                              @foreach($addjournalvideoed as $addjournalvideo)
                                 @if($addjournalvideo->popular =="YES") 
                          <div class="media post_item">
                              <img src="{{$addjournalvideo->photo}}" alt="post" style="width: 100px; height: 70px;" class="img-fluid img-responsive">
                              <div class="media-body">
                                  <a href="{{route('detailbooks',$addjournalvideo->id)}}">
                                      <h3>{{$addjournalvideo->header}}</h3>
                                  </a>
                                  <p>{{$addjournalvideo->auth_name}}</p>
                              </div>
                          </div>
                         @endif 
                          @endforeach
                     
                 
                    
                          <div class="br"></div>
                      </aside>
                 <!--      <aside class="single_sidebar_widget ads_widget">
                          <a href="#">
                              <img class="img-fluid" src="{{asset('frontend/assets/img/popular-post/add.jpg')}}" alt="">
                          </a>
                         
                      </aside> -->
                      
                
                     
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->
   

  

  
      
</div>
<br>
</main>
@include('frontend.front_footer')
</body>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
 



  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>


  <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</html>
