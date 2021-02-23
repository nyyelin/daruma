    @extends('backend_template')
@section('content')
  <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Gallery</h4>
                  </div>
                  <div class="card-body">
                   
                <form method="POST" enctype="multipart/form-data" action="{{route('backendgallery.store')}}">
                  @csrf      
              
                    <div class="row">


                    <div class="form-group col-6">
                      <label for="profile">Class Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile"  value="{{old('profile')}}">
                    </div>


                                        
                  <div class="form-group col-6">
                      <label for="name"> Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter a Class Name" value="{{old('name')}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>




                    </div>
              
               <div class="form-group">
                    <label for="class">Class</label>
                   <select class="form-control selectric" name="class" value="{{old('class')}}">
                        <option value="N1 Class">N1 Class</option>
                        <option value="N2 Class">N2 Class</option>
                        <option value="N3 Class">N3 Class</option>
                        <option value="N4 Class">N4 Class</option>
                        <option value="N5 Class">N5 Class</option>
                        <option value="Special Only Class">Special Only Class</option>
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="categories">Categories</label>
                   <select class="form-control selectric" name="categories" value="{{old('categories')}}">
                        <option value="Class Photo">Class Photo</option>
                        <option value="Other Photo">Other Photo</option>
                        
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    
                   
               
                    
                       

                    
                   
                    

                   
                    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      S A V E
                    </button>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>



     

        

    


          
        </section>
@endsection