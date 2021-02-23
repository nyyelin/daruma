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
                   
                   <form action="{{route('backendvieo.update',$video->id)}}" method="post">
    
                    @csrf
                    @method('PUT')  
              
                    <div class="row">

                        <div class="form-group col-6">
                      <label for="profile">Video</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" value="{{$video->profile}}" >
                    </div>


                            <div class="form-group col-6">
                      <label for="name">Header</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name" value="{{$video->name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>


                    </div>

                      <div class="row">

                          <div class="form-group col-6">
                      <label for="auth_name">Auth_Name</label>
                      <input id="auth_name" type="text" class="form-control" name="auth_name" autofocus placeholder="Enter a Author Name" value="{{$video->auth_name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('auth_name') }} </div>
                    </div>

           <div class="form-group col-6">
                      <label for="dob">Date</label>
                      <input id="dob" type="date" class="form-control" name="dob" autofocus value="{{$video->dob}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>

                    </div>
                   
                    
                     

                       
                   
                      

                    
                <div class="form-group">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" placeholder="Enter Subject" value="{{$video->subject}}"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
          
                    
                   
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      U P D A T E
                    </button>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>




        

    


          
        </section>

@endsection