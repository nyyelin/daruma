    @extends('backend_template')
@section('content')
 <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Gallery</h4>
                    </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('backendgallery.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Class</th>
                            <th>Categories</th>
                             <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($gallerys as $gallery)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$gallery->name}}</td>
                          
                              <td ><img src="{{asset($gallery->photo)}} " title="Class Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                              <td>{{$gallery->class}}</td>
                               <td>{{$gallery->categories}}</td>
                             
                              <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <form action="{{route('backendgallery.destroy',$gallery->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
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