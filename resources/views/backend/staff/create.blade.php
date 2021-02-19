@extends('backend_template')
@section('content')        
 <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>New Staff</h4>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{route('staffs.store')}}">
                  @csrf

                  <div class="row">

                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>

                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email">
                      <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" placeholder="Enter Password">
                        <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>
                       
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">

                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-6">
                      <label for="dob">Dob</label>
                      <input id="dob" type="date" class="form-control" name="dob" autofocus>
                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>

                    <div class="form-group col-6">
                      <label for="phoneno">Phone no</label>
                      <input id="phoneno" type="number" class="form-control" name="phoneno" autofocus placeholder="Enter Phone No">
                      <div class="form-control-feedback text-danger"> {{$errors->first('phoneno') }} </div>
                    </div>
                    
                  </div>

                  <div class="row">

                    <div class="form-group col-6">
                      <label for="designation">Designation</label>
                      <input id="designation" type="text" class="form-control" name="designation" placeholder="Enter Designation">
                    </div>

                    <div class="form-group col-6">
                      <label for="profile">Profile</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" >
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Address</label>
                      <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                    </div>
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
      </div>
    </section>
  </div>

@endsection