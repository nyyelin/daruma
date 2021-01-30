    @extends('frontend_template')
@section('content')

  <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Profile</li>
        </ol>
        <h2>Student Profile</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

   <div class="row">
     <div class="col-lg-4">
       <div class="wrapper">
  <div class="box">
    <div class="js--image-preview"></div>
    <div class="upload-options">
      <label>
        <input type="file" class="image-upload" accept="image/*" />
      </label>
    </div>
  </div>

  


</div>
     </div>
     <div class="col-lg-8">
        <form class="mt-3">

               
                    <div class="row">
                      <div class="col-6">
                                <div class="form-group ">
                            <input type="text" class="form-control" id="Name" name="firstName" placeholder="Your Name" />
                    </div>

                      </div>

                      <div class="col-6">
                        <div class="form-group ">
                           <select class="form-control selectric">
                        <option>Male</option>
                        <option>Female</option>
                        
                      </select>
                    </div>
                      </div>
                    </div>


<br>
                    <div class="row">
                      <div class="col-6">
                                <div class="form-group ">
                           <input type="date" class="form-control" name="telNum" placeholder="Your Birthday" />
                    </div>

                      </div>

                      <div class="col-6">
                        <div class="form-group ">
                           <input type="text" class="form-control" id="lastName" name="Your Phone Number" placeholder="Your Phone Number" />
                    </div>
                      </div>
                    </div>
            

            <br>
                    <div class="row">
                      <div class="col-6">
                                <div class="form-group ">
                           <input type="text" class="form-control" id="areaCode" name="Facebook Name" placeholder="Facebook Name" />
                    </div>

                      </div>

                      <div class="col-6">
                        <div class="form-group ">
                          <input type="text" class="form-control" name="telNum" placeholder="Facebook URL" />
                    </div>
                      </div>
                    </div>
            

<br>

                  <div class="row">
                    <div class="col-12">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-12">
                       <textarea class="form-control" id="feedback" name="feedback" rows="8"></textarea>
                    </div>
                  </div>
                      
                   
                <br>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">Save Information</button>
                        </div>
                    </div>
                </form>
     </div>
   </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

@endsection