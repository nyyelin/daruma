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
  <!--link youtube -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.youtubeplaylist.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/video.css')}}">



















<script type="text/javascript">
      $(function() {
      $("ul.demo1").ytplaylist({deepLinks: true, autoPlay: true,});
      $("ul.demo2").ytplaylist({
                addThumbs:true, 
                autoPlay: true,
                onChange: function() {
                    console.log('changed');
                },
                holderId: 'ytvideo2'});
    });
</script>

</head>
<body>

 @include('frontend.front_nav')
   <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <!-- <li>Blog</li> -->
          <li>Video</li>
        </ol>
        <!-- <h2>Blog</h2> -->
          <h2>Video</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<div class="container">

    <div class="row">
      
      <div class="col-md-7 ">
        <center>
        <div id="ytvideo2"></div>
        </center>
      </div>

      <div class="video col-md-5">
        <div class="card">
          <div class="card-body" style="background-color: #fff;">
            <h6>Video Playlist</h6>
            <p>Daruma Japanese Language School</p>
          </div>
        </div>

        <ul class="demo2" style="overflow: scroll; height: 298px; background-color:#f7f7f7; ">
             @foreach($videos as $video)
            <li><a href="https://www.youtube.com/watch?v=0JwaYorDRzE">{{$video->name}}</a></li>

           @endforeach
        </ul>
      </div>

    </div>

      
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
