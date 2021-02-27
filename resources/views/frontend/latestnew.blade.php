    @extends('frontend_template')
@section('content')
<main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>latest new</li>
        </ol>
        <h2>Latest New</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{$books->photo2}}" alt="" class="img-fluid img-responsive ">
              </div>

              <h2 class="entry-title">
                {{$books->header}}
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center" style="color: black;"><i class="icofont-user"></i> {{$books->auth_name}}</li>
                  <li class="d-flex align-items-center" style="color: black;"><i class="icofont-wall-clock"></i> <time datetime="">{{$books->dob}}</time></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {!!$books->subject!!}
                </p>

             
              </div>

            </article><!-- End blog entry -->


            

          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection