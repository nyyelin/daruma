    @extends('backend_template')
@section('content')
  <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   
                      <div class="col-lg-10 "> <h4>New Staff</h4></div>
                       <div class="col-lg-2 "> 
                        <a href="{{route('staffs.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a>
                      
                      </div>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
	                          	<th>Name</th>
	                          	<th>Email</th>
		                        <th>Photo</th>
		                        <th>Phone no</th>
		                        <th>Address</th>
		                        <th>Desigination</th>
		                        <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        	@php
                        		$i = 1;
                        	@endphp
                        	@foreach($staffs as $staff)
                        		<tr>
                        			<td>{{$i++}}</td>
                        			<td>{{$staff->user->name}}</td>
                        			<td>{{$staff->user->email}}</td>
                        			<td><img src="{{asset($staff->photo)}}" width="55"></td>
                        			<td>{{$staff->user->phone}}</td>
                        			<td>{{$staff->address}}</td>
                        			<td>{{$staff->designation}}</td>
                        			<td>
                        				<a href="{{route('staffs.edit',$staff->id)}}" class="btn btn-warning">Edit</a>
                        				<form action="{{route('staffs.destroy',$staff->id)}}" method="post" class="d-inline" onclick="return confirm('Are you sure to delete?')">
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