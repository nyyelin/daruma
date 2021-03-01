    @extends('frontend_template')
@section('content')
 <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>{{$journalvideo->name}}</li>
        </ol>
        <h2>{{$journalvideo->name}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section class="blog knowledge">
      <div class="container">

        <div class="row">
            <div class="col-lg-4">

          @foreach($addjournalvideos as $addjournalvideo)
          <div class="col-lg-8 entries">

            <article class="entry">
         
        
              <div class="entry-img">
                <img src="{{$addjournalvideo->photo}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
               {{$addjournalvideo->header}}
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center" style="color: black;"><i class="icofont-user"></i> {{$addjournalvideo->auth_name}}</li>
                  <li class="d-flex align-items-center" style="color: black;"><i class="icofont-wall-clock"></i> <time datetime="">{{$addjournalvideo->dob}}</time></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                 {!!$addjournalvideo->subject!!}
                </p>
              </div>
      

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->
          @endforeach

          

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection