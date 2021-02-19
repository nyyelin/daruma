@extends('backend_template')
@section('content')
          
 <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-10  col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4 >Edit Student ( {{$student->codeno}} ) </h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{route('students.update',$student->id)}}">
                  @csrf
                  @method('PUT')
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name" value="{{$student->user->name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>

                    </div>
                    <div class="form-group col-6">
                      <label for="phone">Phone Number</label>
                      <input id="phone" type="number" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$student->user->phone}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>

                    </div>
                  </div>

                      <input type="checkbox" name="check_box" id="check_box" class="change_password_btn mb-4"><label class="form-check-label mb-4" for="check_box">Do you want to change password?</label>

                  <div class="row change_password">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Enter Password" value="{{old('password')}}">

                        <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>

                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" value="{{old('password_confirmation')}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('password_confirmation') }} </div>

                    </div>
                  </div>

                   <div class="row">
                    <div class="form-group col-md-6">
                      
                      <label for="email" class="d-block">Email</label>
                      <input id="email" type="number" class="form-control" name="email" placeholder="Enter Email" value="{{$student->user->email}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>

                    
                    </div>

                    <div class="form-group col-6">
                      <label for="dob" class="d-block">DOB</label>
                      <input id="dob" type="date" class="form-control" name="dob"  value="{{$student->dob}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>

                    </div>

                  </div>



                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Address</label>
                      <textarea class="form-control" name="address">
                        {{$student->address}}
                      </textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                    </div>
                    
                  </div>

                
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Update
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
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('.change_password').hide();

    $('.change_password_btn').click(function() {
      if($('.change_password_btn').is(':checked')){
        $('.change_password').show(1000);
      }else{
        $('.change_password').hide(1000);

      }
    })
  })
</script>
@endsection

