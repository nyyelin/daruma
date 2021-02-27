    @extends('backend_template')
@section('content')
  

        <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update About</h4>
                  </div>
                  <div class="card-body">

                <form action="{{route('backendabout.update',$about->id)}}" enctype="multipart/form-data"     method="post">
                @csrf
                @method('PUT')

                    <div class="row">

                        <div class="form-group col-6">
                      <label for="profile">Abou Photo</label>

                      




                       <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active text-info" id="old-tab" data-toggle="tab" href="#old" role="tab" aria-controls="old" aria-selected="true">Old Photo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">New Photo</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="old" role="tabpanel" aria-labelledby="old-tab">
                <img src="{{asset($about->photo)}}" class="img-fluid" width="100px" height="90px"  style="border-radius: 10px;">
                  <input type="hidden" name="oldimage" value="{{$about->photo}}">
              </div>
              <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
              <input id="profile" type="file" class="form-control-file" name="profile"value="{{$about->profile}}" >
              </div>
            </div>




                    </div>

                 <div class="form-group col-6">
                      <label for="name">Header</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name" value="{{$about->name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>



                    </div>
              

                     <div class="row">
           <div class="form-group col-12">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control s" name="subject" id="summernote" placeholder="Enter Subject" >{{$about->subject}}</textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
                    </div>
                    
                       

                    
                   
                    

                   
                 <div class="form-group col-12" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-lg ">
                      UPDATE
                    </button>
                   
                     <a href="{{route('backendabout.index')}}" style="text-decoration: none;">
              <button class="btn btn-danger  btn-lg " type="button">B A C K</button>
            </a>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>



       
        

    


          
        </section>
@endsection