    @extends('backend_template')
@section('content')
  
        <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>About</h4>
                  </div>
                  <div class="card-body">
                   
                  
              
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                      <label>Photo</label>
                      <input type="file" class="form-control">
                    </div>
                      </div>
                      <div class="col-lg-6"><div class="form-group">
                      <label>Header</label>
                      <input type="text" class="form-control">
                    </div></div>
                    </div>
              

                     
                   
                <div class="form-group">
                      <label>Subject</label>
                      <textarea class="form-control"></textarea>
                    </div>
                    
                    
                       

                    
                   
                    

                   
                    
                  <div class="card-footer text-center">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  <a href="{{route('about')}}"><button class="btn btn-primary mr-1" type="button">Back</button></a>
                  </div>
                </div>
              </div>
        </div>
      </div>



       
        

    


          
        </section>
@endsection