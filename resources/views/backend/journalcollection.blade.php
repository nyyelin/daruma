    @extends('backend_template')
@section('content')
  <section class="section">
  
        


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="col-lg-10"> 
                  <h4>Journal Collection List</h4>
                </div>
                  <div class="col-lg-2"> 
                    <a href="{{route('journal_collection_add')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Header</th>
                        <th>Name</th>
                        <th>Date</th>
                       
                        <th>Categories</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Video</td>
                        
                        <td>Su Myanmar</td>
                   
                        
                       <td>19.12.2020</td>
                       <td>Japan-Myanmar Days</td>
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