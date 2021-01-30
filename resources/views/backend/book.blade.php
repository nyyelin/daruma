    @extends('backend_template')
@section('content')
     <section class="section">



          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="col-lg-10">
                  <h4>Book List</h4>
                </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('booksadd')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                  
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Book</th>
                        <th>Photo</th>
                        <th>Fee</th>
                       
                        <th>Author Name</th>
                        <th>Date</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>N5 Grammer</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="{{asset ('backend/assets/img/users/user-8.png')}}" alt="user" data-toggle="tooltip" title="Book Photo"
                           >
                         </li>
                       </ul>
                        </td>
                        <td>10,000 MMK</td>
                   
                        <td class="align-middle">
                       
                        Su Myanmar
                        </td>
                       <td>19.12.2020</td>
                        <td>
                          <a href="#" class="btn btn-outline-info">Update</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                        </td>
                      </tr>
                       <tr>
                        <td></td>
                        <td>2</td>
                        <td>N1 Grammer</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0 m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="{{asset ('backend/assets/img/users/user-8.png')}}" alt="user" data-toggle="tooltip" title="Book Photo"
                           >
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="{{asset ('backend/assets/img/users/user-8.png')}}" alt="user" data-toggle="tooltip" title="Latest New Photo"
                           >
                         </li>
                       </ul>
                        </td>
                        <td>10,000 MMK</td>
                   
                        <td class="align-middle">
                       
                        Su Myanmar
                        </td>
                       <td>19.12.2020</td>
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