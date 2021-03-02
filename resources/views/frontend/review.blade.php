    @extends('frontend_template')
@section('content')
     <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>Review</li>
        </ol>
        <h2>Review</h2>

      </div>
    </section><!-- End Breadcrumbs -->
<br>
    <section id="testimonials" class="testimonials mt-1 ">
      <div class="container">

 @foreach($subjects as $subject)
        <div class="section-title">
          <h2>{{$subject->name}}</h2>
          <p>{!!$subject->subject!!}</p>
        </div>
@endforeach

        <div class="row">

 @foreach($reviews as $review)
          <div class="col-lg-6 my-3">
            <section class="rating__card">
  <blockquote class="rating__card__quote">{!!$review->subject!!}</blockquote>
  
  <div class="rating__card__stars">
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="rating__card__stars__name">{{$review->name}}</span>
  </div>
  <p class="rating__card__bottomText">{{$review->class}}</p>
</section>
          </div>


    @endforeach

  











        </div>

      </div>
    </section><!-- End Testimonials Section -->


  </main><!-- End #main -->
@endsection