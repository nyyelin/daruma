    @extends('frontend_template')
@section('content')
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


     <div class="col-lg-6 mt-5">
      

        @if(session('flash'))
        <p style="color: green;">{{ session('flash') }}</p>
        @endif
              <form method="POST" action="/Our_Contact" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" required="" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center">
                
             <input type="submit" class="btn btn-primary" value="submit" name="">
              </div>
            </form>
          </div>



        </div>
@endforeach
 
 
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

@endsection