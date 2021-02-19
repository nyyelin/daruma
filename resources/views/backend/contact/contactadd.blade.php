    @extends('backend_template')
@section('content')
   <section class="section">

        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Contact</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('backendcontact.store')}}">
                  @csrf
            

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email">
                      <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>
                    </div>


                     
                    <div class="form-group col-6">
                      <label for="phone">Phone no (or) Tel</label>
                      <input id="phone" type="number" class="form-control" name="phone" autofocus placeholder="Enter Phone No">
                      <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>
                    </div>
                    </div>

             
                    <div class="form-group ">
                      <label for="map">Map</label>
                      <input id="map" type="text" class="form-control" name="map" autofocus placeholder="Enter a Map  Link (or) URL">
                      <div class="form-control-feedback text-danger"> {{$errors->first('map') }} </div>
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



    

        

    


          
        </section>
        
@endsection