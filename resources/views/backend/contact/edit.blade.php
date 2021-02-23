    @extends('backend_template')
@section('content')

   <section class="section">

        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Contact</h4>
                  </div>
                  <div class="card-body">

                    <form action="{{route('backendcontact.update',$contact->id)}}" method="post">
    
                        @csrf
                        @method('PUT')
            

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$contact->email}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>
                    </div>


                     
                    <div class="form-group col-6">
                      <label for="phone">Phone no (or) Tel</label>
                      <input id="phone" type="number" class="form-control" name="phone" autofocus placeholder="Enter Phone No" value="{{$contact->phone}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>
                    </div>
                    </div>

             
                    <div class="form-group ">
                      <label for="map">Map</label>
                      <input id="map" type="text" class="form-control" name="map" autofocus placeholder="Enter a Map  Link (or) URL" value="{{$contact->map}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('map') }} </div>
                    </div>
                   
                    
                    
                          
             <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Address</label>
                      <textarea class="form-control" name="address" placeholder="Enter Address" >{{$contact->address}}</textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                    </div>
                  </div>
                       

                    
                   
                    

                   
                    
                   
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                     U P D A T E
                    </button>
                     <br>
                     <a href="{{route('backendcontact.index')}}" style="text-decoration: none;">
              <button class="btn btn-danger  btn-lg btn-block" type="button">B a c k</button>
            </a>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>



    

        

    


          
        </section>
        
@endsection