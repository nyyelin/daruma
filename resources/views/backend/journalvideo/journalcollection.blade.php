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
                        <h4>Add Detail Journal & Video</h4>
                    </div>
                    <div class="col-lg-2"> 
                  <!--   <a href="{{route('backendaddjournalvideo.create',)}}"> --> <!-- </a> -->
                       <form method="GET" enctype="multipart/form-data" action="{{route('backendaddjournalvideo.create')}}">

                  @csrf    
                  <input type="hidden" name="journalvideoid" value="{{$journalvideo->id}}">
                        <button class="btn btn-primary " type="submit">+ Add </button>
  
                  </form>  
                  </div> 
                       
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Auth_Name</th>
                            <th>Photo</th>
                            <th>Header</th>
                            <th>Date</th>
                            <!-- <th>Subject</th> -->
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($addjournalvideos as $addjournalvideo)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$addjournalvideo->auth_name}}</td>
                          
                              <td ><img src="{{asset($addjournalvideo->photo)}} " title="Journal & Video Photo" alt="Video"  data-toggle="tooltip" width="55"></td>
                              <td>{{$addjournalvideo->header}}</td>
                               <td>{{$addjournalvideo->dob}}</td>
                             
                              <td>
                                 <a href="{{route('backendaddjournalvideo.edit',$addjournalvideo->id)}}" class="btn btn-warning">E d i t</a>

                                <form action="{{route('backendaddjournalvideo.destroy',$addjournalvideo->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
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