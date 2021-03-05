    @extends('frontend_template')
@section('content')

 <link rel="stylesheet" href="{{asset('frontend/vendors/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

<main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>latest new</li>
        </ol>
        <h2>Latest New</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container">

        <div class="row">


          <div class="col-lg-8 entries mx-auto">

            

              <div class="entry-img">
                <img src="{{$books->photo2}}" alt="" class="img-fluid img-responsive ">
              </div>
<br>
              <h2 class="entry-title">
                {{$books->header}}
              </h2>

               <p><i class="lnr lnr-user"></i> {{$books->auth_name}} &nbsp;&nbsp;  <i class="lnr lnr-calendar-full"></i> {{$books->dob}}</p>

           
              <div class="entry-content">
                <p>
                 {!!$books->subject!!}
                </p>

             
              </div>

            


            

          </div><!-- End blog entries list -->
          <div class="col-lg-4">
               <div class="blog_right_sidebar">
                     
                      
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Books Collection</h3>

                      @foreach($bookeds as $book)
                          <div class="media post_item @if($book->id == $books->id) bg-light shadow @endif">
                              <img src="{{$book->photo}}" alt="post" style="width: 70px; height: 70px;" class="img-fluid img-responsive">
                              <div class="media-body">
                                  <a href="{{route('latestnew',$book->id)}}">
                                      <h3>{{$book->name}}</h3>
                                  </a>
                                  <p>{{$book->fee}}</p>
                              </div>
                          </div>
                     
                       @endforeach
                          <div class="br"></div>
                      </aside>
                    
                
                     
                  </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection