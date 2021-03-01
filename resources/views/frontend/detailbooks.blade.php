    @extends('frontend_template')
@section('content')
 <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>{{$addjournalvideo->detail->name}}</li>
        </ol>
        <h2>{{$addjournalvideo->detail->name}}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section class="blog knowledge">
      <div class="container">

        <div class="row">
           <div class="col-12" >
              <h4> {{$addjournalvideo->header}}</h4>          </div>
              <br>
           
           <div class="col-12 mt-3">
              <img src="{{$addjournalvideo->photo}}" alt="" class="img-fluid img-responsive" width="700px;" height="600px;">
           </div>
           <br>
  
            <div class="col-12 mt-3">
             <i class="icofont-user"></i> {{$addjournalvideo->auth_name}} <i class="icofont-wall-clock"></i> {{$addjournalvideo->dob}}
           </div>
           <div class="col-12">
          
           <p>
                 {!!$addjournalvideo->subject!!}
                </p>

</div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection