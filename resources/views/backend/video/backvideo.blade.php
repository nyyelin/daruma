    @extends('backend_template')
@section('content')

<section class="section">
  @if(session('msg'))
  <div class="alert alert-success alert_msg">
    <span>{{session('msg')}}</span>
  </div>
  @endif

         <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                           <div class="col-lg-10 ">
                        <h4>Add Video</h4>
                    </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('backendvideo.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                        <th>Header</th>
                        <th>Auth_Name</th>
             
                        <th>Date</th>
                        <th>Subject</th>
                             <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($videos as $video)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$video->name}}</td>
                            <td>{{$video->auth_name}}</td>
                           
                              <td>{{$video->dob}}</td>
                              <td style="width: 600px;">{!!$video->subject!!}</td>
                             
                              <td>
                                 <a href="{{route('backendvideo.edit',$video->id)}}" class="btn btn-warning my-3">E d i t</a>
                                <form action="{{route('backendvideo.destroy', $video->id)}}" method="post" class="d-inline my-3" onclick="return confirm('Are you sure to delete?')">
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