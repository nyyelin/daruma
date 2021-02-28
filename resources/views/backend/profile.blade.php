@extends('backend_template')
@section('content')
   <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              {{-- <div class="col-12 col-md-12 col-lg-4">

                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
                      <img alt="image" src="" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#">{{Auth::user()->name}}</a>
                      </div>
                      <div class="author-box-job">Web Developer</div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias
                          minus quod dignissimos.
                        </p>
                      </div>
                      <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold">Follow Hasan On</div>
                      </div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                          30-05-1998
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          (0123)123456789
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          test@example.com
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Facebook
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">John Deo</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Twitter
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">@johndeo</a>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Skills</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-green" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> --}}
              

              <div class="col-12 col-md-12 col-lg-8 mx-auto">
                @if(session('msg'))
                <div class="alert alert-success alert_msg">
                  <span>{{session('msg')}}</span>
                </div>
                @endif
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    {{--  <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">About</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="true">Setting</a>
                      </li>  --}}
                    </ul>

                    <div class="tab-content tab-bordered" id="myTab3Content">

                      {{-- <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted">Emily Smith</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted">(123) 456 7890</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted">johndeo@example.com</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Location</strong>
                            <br>
                            <p class="text-muted">India</p>
                          </div>
                        </div>
                        <p class="m-t-30">Completed my graduation in Arts from the well known and
                          renowned institution
                          of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                          affiliated
                          to M.S. University. I ranker in University exams from the same
                          university
                          from 1996-01.</p>
                        <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                          Gujarat
                          from 2003-2015 </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                          industry. Lorem
                          Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when
                          an unknown printer took a galley of type and scrambled it to make a
                          type
                          specimen book. It has survived not only five centuries, but also the
                          leap
                          into electronic typesetting, remaining essentially unchanged.</p>
                        <div class="section-title">Education</div>
                        <ul>
                          <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                          <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                          <li>P.H.D., Shaurashtra University, Rajkot</li>
                        </ul>
                        <div class="section-title">Experience</div>
                        <ul>
                          <li>One year experience as Jr. Professor from April-2009 to march-2010
                            at B.
                            J. Arts College, Ahmedabad.</li>
                          <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                            Collage
                            from April - 2008 to April - 2011.</li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                          </li>
                        </ul>
                      </div> --}}
                      <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation" action="{{route('staff_update')}}" enctype="multipart/form-data">
                          @csrf
                          
                          
                          <div class="card-body">

                            <div class="row justify-content-center">
                               <img alt="image" src="{{ asset(Auth::user()->staff->photo) }}" class="user-img-radious-style" width="130px" height="130px"> <span class="d-sm-none d-lg-inline-block"></span>
                            </div>
                            <div class="row">
                             <div class="col-md-2 mx-auto mt-3 ml-5 mt-2 newphoto">
                               <input type="file" name="new_photo" >
                               <input type="hidden" name="old_photo" value="{{Auth::user()->staff->photo}}">
                             </div>
                              
                            </div>
                            
                            <div class="row mt-3">
                              <div class="form-group col-md-6 col-12">
                                <label>Name</label>
                                <input type="text" class="form-control name" name="name" value="{{Auth::user()->name}}" disabled="">
                                <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                                
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Email</label>
                                <input type="email" class="form-control email" name="email" value="{{Auth::user()->email}}" disabled="">
                                <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>
                                
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Phone</label>
                                <input type="number" class="form-control phone" value="{{Auth::user()->phone}}" disabled="" name="phone">
                                <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>
                                
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>DOB</label>
                                <input type="date" class="form-control dob" value="{{Auth::user()->staff->dob}}" disabled="" name="dob">
                                <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                              </div>
                            </div>
                            <input type="checkbox" name="" class="change_password" id="change_password"><label for="change_password" class="change_password text-dark ml-2">Change password</label>

                            <div class="row form-group change_password_form">
                              
                              <div class="col-md-6 ">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Enter Password" value="{{ old('password') }}">
                                <div class="form-control-feedback text-dark"> Password must be at least 8 </div>
                                <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>
                              </div>
                              <div class="col-md-6">
                                <label>Confirm Password</label>
                                 <input id="password2" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" value="{{ old('password_confirmation') }}">
                                 <div class="form-control-feedback text-danger"> {{$errors->first('password_confirmation') }} </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                                <label>Address</label>
                                <textarea
                                  class="form-control summernote-simple address" disabled="" name="address">
                                    {{Auth::user()->staff->address}}
                                  </textarea>
                                  <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                              </div>
                            </div>
                            
                          </div>

                          <div class="card-footer text-right" >
                            <button type="button" class="btn btn-warning btn_edit">Edit</button>
                            <button class="btn btn-primary btn_update">Update</button>
                            <button type="button" class="btn btn-secondary text-dark btn_cancel">Cancel</button>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

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
      $('.btn_update').show();
      $('.change_password').show();
      $('.newphoto').show();
      $('.btn_cancel').show();

      $('.name').prop('disabled',false);
      $('.email').prop('disabled',false);
      $('.phone').prop('disabled',false);
      $('.dob').prop('disabled',false);
      $('.address').prop('disabled',false);


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

    })
  })
</script>
@endsection