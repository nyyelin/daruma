    @extends('frontend_template')

@section('content')

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-12"></div>
       
        <div class="col-lg-8 col-12"><div class="containmer  " style="border-radius: 20px;">
      <div class="user signinBx">
        <div class="imgBx"><img src="{{asset('frontend/assets/img/logo2.jpg')}}" alt="" class="img-fluid img-responsive"></div>
        <div class="formBx">

         <form method="POST" action="{{ route('login') }}">
                        @csrf
            <h2>    <a href="{{route('adminlogin')}}" class="
                         ">
                                <img src="{{asset('frontend/assets/img/admin.png')}}" width="40">
                                </a>Student Sign In</h2>

             <div class="form-group row">
                            <!-- <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
 -->
                      
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus placeholder="Your Phone no">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>


            <div class="form-group row">
                        <!--     <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>
 -->
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                 <div class="form-group row mb-0">
                         
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                       

             
                        </div>
                        <br>
                        <div class="form-group row">
            <p class="signup">
 

              Don't have an account ? &nbsp;&nbsp;&nbsp;
              <a href="https://www.facebook.com/SUMyanmarDARUMA" target="_blank" >Contact Me.</a>

            </p>
            </div>
          </form>
        </div>
      </div>
   
    </div></div>
     <div class="col-lg-2 col-12"></div>
    
    </div>
  </div>
  </section> 

  <style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');


section .containmer {
  position: relative;
  width: 800px;
  height: 500px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  margin-top: 7%


}

section .containmer .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .containmer .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  transition: 0.5s;
}

section .containmer .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .containmer .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .containmer .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #555;
}

section .containmer .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .containmer .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

a{
  text-decoration: none;
}



section .containmer .signupBx {
  pointer-events: none;
}

section .containmer.active .signupBx {
  pointer-events: initial;
}

section .containmer .signupBx .formBx {
  left: 100%;
}

section .containmer.active .signupBx .formBx {
  left: 0;
}

section .containmer .signupBx .imgBx {
  left: -100%;
}

section .containmer.active .signupBx .imgBx {
  left: 0%;
}

section .containmer .signinBx .formBx {
  left: 0%;
}

section .containmer.active .signinBx .formBx {
  left: 100%;
}

section .containmer .signinBx .imgBx {
  left: 0%;
}

section .containmer.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .containmer {
    max-width: 400px;
  }

  section .containmer .imgBx {
    display: none;
  }

  section .containmer .user .formBx {
    width: 100%;
  }
}

</style>

@endsection