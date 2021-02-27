    @extends('frontend_template')
@section('content')
 <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>ထုတ်ဝေပြီးသော စာအုပ်များ</li>
        </ol>
        <h2>ထုတ်ဝေပြီးသော စာအုပ်များ</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section class="blog knowledge">
      <div class="container">

        <div class="row">
            <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">ထုတ်ဝေပြီးသော စာအုပ်များ</h3>

              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="{{asset ('frontend/assets/img/blog-recent-1.jpg')}}" alt="">
                  <h4><a href="blog-single.html">N-1 Kangi</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset ('frontend/assets/img/blog-recent-2.jpg')}}" alt="">
                  <h4><a href="blog-single.html">N-2 Grammer</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset ('frontend/assets/img/blog-recent-3.jpg')}}" alt="">
                  <h4><a href="blog-single.html">N-3</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

          <div class="col-lg-8 entries">

            <article class="entry">
          @foreach($addjournalvideos as $addjournalvideo)
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
@endforeach
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection