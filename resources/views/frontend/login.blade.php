    @extends('frontend_template')
@section('content')


  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-12"></div>
       
        <div class="col-lg-8 col-12"><div class="containmer  " style="border-radius: 20px;">
      <div class="user signinBx">
        <div class="imgBx"><img src="{{asset('assets/img/logo2.jpg')}}" alt="" class="img-fluid img-responsive"></div>
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2>Sign In</h2>
            <input type="text" name="" placeholder="Phone Number" />
            <input type="password" name="" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup" >
              Don't have an account ?
              <a href="https://www.facebook.com/SUMyanmarDARUMA" target="_blank">Contact Me.</a>
            </p>
          </form>
        </div>
      </div>

   
    </div></div>
     <div class="col-lg-2"></div>
    
    </div>
  </div>
  </section>  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
       
        <div class="col-lg-8"><div class="containmer  " style="border-radius: 20px;">
      <div class="user signinBx">
        <div class="imgBx"><img src="assets/img/logo2.jpg" alt="" class="img-fluid img-responsive"></div>
        <div class="formBx">
          <form action="" onsubmit="return false;">
            <h2>Sign In</h2>
            <input type="text" name="" placeholder="Phone Number" />
            <input type="password" name="" placeholder="Password" />
            <input type="submit" name="" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="https://www.facebook.com/SUMyanmarDARUMA" target="_blank" >Contact Me.</a>
            </p>
          </form>
        </div>
      </div>
   
    </div></div>
     <div class="col-lg-2"></div>
    
    </div>
  </div>
  </section>
@endsection