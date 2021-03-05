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
          <li>Contact</li>
        </ol>
        <h2>Contact</h2>


      </div>
    </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">


         @foreach($contacts as $contact)
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Daruma Address</h3>
              <p>{!!$contact->address!!}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{$contact->email}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{$contact->phone}}</p>
            </div>
          </div>

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="{{$contact->map}}}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>


     <div class="col-lg-6 my-1">
      
<div class="comment-form" style="margin-top: -1px;">
                      <h4>Leave a Reply</h4>
                         @if(session('flash'))
        <p style="color: green;">{{ session('flash') }}</p>
        @endif
                     <form method="POST" action="/Our_Contact" enctype="multipart/form-data">
              @csrf
                          <div class="form-group form-inline">
                              <div class="form-group col-lg-6 col-md-6 name">
                                  <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" required="">
                                     <div class="validate"></div>
                              </div>
                              <div class="form-group col-lg-6 col-md-6 email">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="">
                                   <div class="validate"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="subject"  name="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required="">
                              <div class="validate"></div>
                          </div>
                          <div class="form-group">
                              <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                  required=""></textarea>
                                    <div class="validate"></div>
                          </div>
                          <input type="submit" class="btn btn-primary" value="S U B M I T" name="">
                      </form>
                  </div>





       

          </div>



        </div>
@endforeach
 
 
      </div>
    </section><!-- End Contact Section -->
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
