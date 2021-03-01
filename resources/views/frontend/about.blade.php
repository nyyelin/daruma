    @extends('frontend_template')
@section('content')

  <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

 @foreach($abouts as $about)
        <div class="row">
          <div class="col-lg-6">
            <img src="{{$about->photo}}" class="img-fluid" alt="" data-aos="zoom-out">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{$about->name}}</h3>
           
            <p>{!!$about->subject!!}</p>  
          </div>
        </div>
@endforeach
      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->
@endsection