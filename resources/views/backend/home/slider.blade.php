    @extends('backend_template')
@section('content')
  <section class="section">
      @if(session('msg'))
  <div class="alert alert-success alert_msg">
    <span>{{session('msg')}}</span>
  </div>
  @endif
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Add Slider</h4>
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
                          
                              <td ><img src="{{asset($slider->photo)}} " title="Slider Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                          
                              <td style="width: 500px;">{!!$slider->subject!!}</td>
                        
                              <td>
                                <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-warning">E d i t</a>
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

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });



    $('.alert_msg').hide(3000);

   


    })

   



</script>
@endsection