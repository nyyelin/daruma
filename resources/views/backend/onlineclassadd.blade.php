    @extends('backend_template')
@section('content')
  

        <section class="section">
  
           <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Online Class Timetables</h4>
                  </div>
                  <div class="card-body">
                   
                  
              <div class="row">
                <div class="col-lg-6">      <div class="form-group">
                      <label>Class Name</label>
                      <input type="text" class="form-control">
                    </div></div>
                  <div class="col-lg-6">
                      
                    <div class="form-group">
                      <label>Starting Date</label>
                      <input type="date" class="form-control">
                    </div>
                  </div>
              </div>

               <div class="row">
                <div class="col-lg-6"> <div class="form-group">
                      <label>Day</label>
                      <select class="form-control selectric" multiple="">
                        <option>Mon</option>
                        <option>Tue</option>
                        <option>Wed</option>
                        <option>Thu</option>
                        <option>Fri</option>
                        <option>Sat</option>
                        <option>Sun</option>
                          <option>Special Only Class</option>
                      </select>
                    </div>
</div>
                  <div class="col-lg-6">
                     <div class="form-group">
                      <label>Duration</label>
                      <select class="form-control selectric">
                        <option> 1 Month</option>
                        <option>2 Months</option>
                        <option>3 Months</option>
                        <option>4 Months</option>
                        <option>5 Months</option>
                        <option>6 Months</option>
                      </select>
                    </div></div>
              </div>





             
                   
                    <div class="row">
                      <div class="col-lg-6">
                         <div class="form-group">
                      <label>From</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-clock"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control timepicker">
                      </div>
                    </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="form-group">
                      <label>To</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-clock"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control timepicker">
                      </div>
                    </div>
                      </div>
                           
                     </div>

                   
                     <div class="form-group">
                      <label>Fee</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                          </div>
                        </div>
                        <input type="text" class="form-control currency">
                      </div>
                    </div>
                   
          
                    
                    
                  <div class="card-footer text-center">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  <a href="{{route('class_timetables')}}"><button class="btn btn-primary mr-1" type="button">Back</button></a>
                  </div>
                </div>
              </div>
        </div>
      </div>



       
        

    


          
        </section>

@endsection