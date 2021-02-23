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
                        <h4>Add Review</h4>
                    </div>
                    <div class="col-lg-2"> 
                    <a href="{{route('backendreview.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
                       
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
                       <th>Reviw Text</th>
                        <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                    
                         @php
                            $i = 1;
                          @endphp
                          @foreach($reviews as $review)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$review->name}}</td>
                            <td ><img src="{{asset($review->photo)}} " title="Stutend Photo" alt="user"  data-toggle="tooltip" width="55"></td>
                             <td>{{$review->class}}</td>
                             <td style="width: 300px;">{{$review->subject}}</td>
                              
                              <td>
                                <a href="{{route('backendreview.edit',$review->id)}}" class="btn btn-warning">E d i t</a>

                                <form action="{{route('backendreview.destroy',$review->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
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