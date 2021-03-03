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
      

<form class="" action="{{route('update_information')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="box">
   
    <div class="">
      
      <div class="row">
        <div class="col-md-12 mx-auto ml-5">
           <img alt="image" src="{{ asset($student->photo) }}" class="user-img-radious-style" width="150px" height="150px"> <span class="d-sm-none d-lg-inline-block"></span>
         </div>
      </div>
      <div class="row">
       <div class="col-md-6 mt-3 newphoto">
         <input type="file" name="new_photo" >
         <input type="hidden" name="old_photo" value="{{$student->photo}}">
       </div>
        
      </div>
    </div>
  </div>

  


     </div>
     <div class="col-lg-8 mx-auto">
        
              <div class="row mt-4">
                  <div class="col-6">
                    <div class="form-group ">
                      <input type="text" class="form-control name" id="name" name="name" value="{{$student->user->name}}" disabled="" />
                    </div>

                  </div>

                  <div class="col-6">
                    <div class="form-group ">
                      <input type="email" class="form-control email" id="email" name="email" value="{{$student->user->email}}" disabled="" />
                    </div>

                  </div>

                
              </div>

              <div class="row mt-4">

                  <div class="col-6">
                    <div class="form-group ">
                       <input type="number" class="form-control phone" id="phone" name="phone" value="{{$student->user->phone}}" disabled=""/>
                    </div>
                  </div>

                  <div class="col-6">
                      <div class="form-group ">
                        <input type="date" class="form-control dob" name="dob" value="{{$student->dob}}" disabled=""/>
                      </div>

                  </div>

                
              </div>
      

     
              <div class="row mt-4">
                  <div class="col-6">
                    <div class="form-group ">
                      <input type="text" class="form-control fb_link" id="areaCode" name="fb_name" placeholder="Facebook Name or Link" value="{{$student->profile_link}}" disabled=""/>
                    </div>

                  </div>

                  <div class="col-6">
                     <textarea class="form-control address" name="address" disabled="" >
                       {{$student->address}}
                     </textarea>
                  </div>
              </div>

              <input type="checkbox" name="" class="change_password" id="change_password"><label for="change_password" class="change_password text-dark ml-2">Change password</label>

                <div class="row form-group change_password_form mt-4">
                  
                  <div class="col-md-6 ">
                    
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                    <div class="form-control-feedback text-dark"> Password must be at least 8 </div>
                    <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>
                  </div>
                  <div class="col-md-6">
                   
                     <input id="password2" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" value="{{ old('password_confirmation') }}">
                     <div class="form-control-feedback text-danger"> {{$errors->first('password_confirmation') }} </div>
                  </div>
                </div>
      
              <div class="form-group row mt-4">
                  <div class="offset-md-2 col-md-10">
                      <button type="button" class="btn btn-warning btn_edit">Edit Information</button>
                      <button type="button" class="btn btn-secondary btn_change">Change Password</button>

                      <button type="submit" class="btn btn-primary btn_update">Update Information</button>
                      <button type="button" class="btn btn-secondary btn_cancel">Cancle</button>
                  </div>
              </div>
          </form>
     </div>
   </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

@endsection



@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('.btn_update').hide();
    $('.change_password').hide();

    $('.newphoto').hide();
    $('.change_password_form').hide();
    $('.btn_cancel').hide();
    $('.btn_edit').show();
    $('.alert_msg').hide(3000);

    $('.btn_edit').click(function() {
      $('.btn_edit').hide();
      $('.btn_change').hide();

      $('.btn_update').show();
      $('.change_password').show();
      $('.newphoto').show();
      $('.btn_cancel').show();
      $('.name').prop('disabled',false);
      $('.email').prop('disabled',false);
      $('.phone').prop('disabled',false);
      $('.dob').prop('disabled',false);
      $('.address').prop('disabled',false);
      $('.fb_link').prop('disabled',false);

    })

    $('.btn_change').click(function() {
      $('.btn_edit').hide();
      $('.btn_change').hide();

      $('.btn_update').show();
      $('.change_password').show();
      // $('.newphoto').show();
      $('.btn_cancel').show();
      // $('.name').prop('disabled',false);
      // $('.email').prop('disabled',false);
      // $('.phone').prop('disabled',false);
      // $('.dob').prop('disabled',false);
      // $('.address').prop('disabled',false);

    })

    $('#change_password').click(function() {
       if($('#change_password').is(':checked')){
        $('.change_password_form').show();
       }else{
        $('.change_password_form').hide();
       }
    })

    $('.btn_cancel').click(function(){
      $('.btn_update').hide();
      $('.btn_change').show();

      $('.change_password').hide();
      $('.newphoto').hide();
      $('.change_password_form').hide();
      $('.btn_cancel').hide();
      $('.btn_edit').show();

      $('.name').prop('disabled',true);
      $('.email').prop('disabled',true);
      $('.phone').prop('disabled',true);
      $('.dob').prop('disabled',true);
      $('.address').prop('disabled',true);
      $('.fb_link').prop('disabled',true);


    })
  })
</script>
@endsection