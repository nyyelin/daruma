    @extends('backend_template')
@section('content')
   <section class="section">
  
     



          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <div class="col-lg-10"> 
                  <h4>Gallery</h4>
                </div>
                   <div class="col-lg-2"> 
                    <a href="{{route('galleryadd')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Photo</th>
                     
                       <th>Categories</th>
                       
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Batch 6</td>
                        
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="{{asset ('backend/assets/img/users/user-8.png')}}" alt="user" data-toggle="tooltip" title="Batch"
                           >
                         </li>
                       </ul>
                        </td>
                       <td>Class Photo</td>
                   
                       
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