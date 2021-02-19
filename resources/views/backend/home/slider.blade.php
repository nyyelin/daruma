    @extends('backend_template')
@section('content')
  <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Home Page Slider</h4>
                    </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('slider.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                      
                             <th>Header</th>
                        <th>Photo</th>
                      
                   
                        <th>Subject</th>
                        <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($sliders as $slider)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$slider->name}}</td>
                          
                              <td ><img src="{{asset($slider->photo)}} " title="slider Logo" alt="user"  data-toggle="tooltip" width="55"></td>
                          
                              <td>{{$slider->subject}}</td>
                        
                              <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <form action="{{route('slider.destroy',$slider->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
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