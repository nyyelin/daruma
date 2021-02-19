    @extends('backend_template')
@section('content')
    

         <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Home Page Book</h4>
                    </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('book.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                        <th>Book</th>
                        <th>Photo</th>
                        <th>Photo2</th>
                        <th>Fee</th>
                       
                        <th>Author Name</th>
                        <th>Date</th>
                        <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($books as $book)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$book->name}}</td>
                          
                              <td ><img src="{{asset($book->photo)}} " title="Ebook Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                              <td ><img src="{{asset($book->photo2)}} " title="Detail Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                            <td>{{$book->fee}}</td>
                              <td>{{$book->auth_name}}</td>
                        <td>{{$book->dob}}</td>
                              <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <form action="{{route('book.destroy',$book->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">Delete</button>
                                  
                                </form>
                                
                              </td>

                            </tr>
                          @endforeach
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </section>
@endsection