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
                   
                  
               <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                     <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control">
                    </div>

                     <div class="form-group">
                      <label>Tel</label>
                      <input type="tel" class="form-control">
                    </div>

             
                     <div class="form-group">
                      <label>Map</label>
                      <input type="text" class="form-control">
                    </div>
                   
                    
                    
                    
                       

                    
                   
                    

                   
                    
                  <div class="card-footer text-center">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                   <a href="{{route('contact')}}"><button class="btn btn-primary mr-1" type="button">Back</button></a>
                  </div>
                </div>
              </div>
        </div>
      </div>



    

        

    


          
        </section>
        
@endsection