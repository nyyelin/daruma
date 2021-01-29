    @extends('backend_template')
@section('content')
  
        <section class="section">
  
          



           <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="col-lg-10"> 
                  <h4>Online Class Timetables</h4>
                </div>
                   <div class="col-lg-2 "> 
                    <a href="{{route('class_timetables_add')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Class</th>
                        <th>Starting Date</th>
                        <th>Days</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Basic N5</td>
                        <td class="text-truncate">
                          12/09/2021
                        </td>
                        <td>Mon,Tue,Wed</td>
                        <td>12:00 ~ 04:00</td>
                        <td class="align-middle">
                       
                        4 Months
                        </td>
                       <td>150,000 MMK</td>
                        <td>
                          <a href="#" class="btn btn-outline-info">Update</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                       <tr>
                        <td></td>
                        <td>2</td>
                        <td>Basic N5</td>
                        <td class="text-truncate">
                          12/09/2021
                        </td>
                        <td>Mon,Tue,Wed</td>
                        <td>12:00 ~ 04:00</td>
                        <td class="align-middle">
                       
                        4 Months
                        </td>
                       <td>150,000 MMK</td>
                        <td>
                          <a href="#" class="btn btn-outline-info">Update</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                 




                      
                        
              
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        

    


          
        </section>
@endsection