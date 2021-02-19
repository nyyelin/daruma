    @extends('backend_template')
@section('content')
  <section class="section">

        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Review</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('backendreview.store')}}">
                  @csrf         

                  
              <div class="row">

  <div class="form-group col-6">
                      <label for="profile">Stutend Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" >
                    </div>





                <div class="col-lg-6">
              </div>




            </div>
                <div class="row">


                    <div class="form-group col-6 ">
                      <label for="name">Stutend Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter a Header">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>



 <div class="form-group col-6">
                    <label for="class">Class</label>
                   <select class="form-control selectric" name="class">
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
                
              </div>

             

                     
                   
                    
                  <div class="form-group ">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" placeholder="Enter Subject"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
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