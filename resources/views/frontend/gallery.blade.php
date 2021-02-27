    @extends('frontend_template')
@section('content')
  <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Gallery</li>
        </ol>
        <h2>Gallery</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

      

        <div class="row portfolio-container">

@foreach($gallerys as $gallery)
@if($gallery->categories=='Class Photo')
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{$gallery->photo}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$gallery->name}}</h4>
                <p>{{$gallery->class}}</p>
                <div class="portfolio-links">
                  <a href="{{$gallery->photo}}" data-gall="portfolioGallery" class="venobox" title="{{$gallery->class}} Photo "><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
@endif

@endforeach

       

    
    


        

       

          

        </div>

      </div>
    </section>

    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Other Photo</h2>
        </div>

        <div class="owl-carousel clients-carousel">
@foreach($gallerys as $gallery)
@if($gallery->categories=='Other Photo')
          <img src="{{$gallery->photo}}" alt="">
         
          @endif

@endforeach  
        </div>

      </div>
    </section>

  </main><!-- End #main -->
@endsection