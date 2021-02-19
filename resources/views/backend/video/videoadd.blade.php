    @extends('backend_template')
@section('content')
  <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Video</h4>
                  </div>
                  <div class="card-body">
                   
                    <form method="POST" enctype="multipart/form-data" action="{{route('backendvideo.store')}}">
                  @csrf   
              
                    <div class="row">

                        <div class="form-group col-6">
                      <label for="profile">Video</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" >
                    </div>


                            <div class="form-group col-6">
                      <label for="name">Header</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>


                    </div>

                      <div class="row">

                          <div class="form-group col-6">
                      <label for="auth_name">Auth_Name</label>
                      <input id="auth_name" type="text" class="form-control" name="auth_name" autofocus placeholder="Enter a Author Name">
                      <div class="form-control-feedback text-danger"> {{$errors->first('auth_name') }} </div>
                    </div>

           <div class="form-group col-6">
                      <label for="dob">Date</label>
                      <input id="dob" type="date" class="form-control" name="dob" autofocus>
                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>

                    </div>
                   
                    
                     

                       
                   
                      

                    
                <div class="form-group">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" placeholder="Enter Subject"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
          
                    
                   
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>




        

    


          
        </section>

@endsection