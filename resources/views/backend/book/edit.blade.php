    @extends('backend_template')
@section('content')
      
        <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Book</h4>
                  </div>
                  <div class="card-body">
                   
        <form method="POST" enctype="multipart/form-data" action="{{route('book.update',$book->id)}}">
                  @csrf         
                      @method('PUT')


                   <div class="row">


                    
                  <div class="form-group col-6">
                      <label for="name">Book Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter a Book Name" value="{{$book->name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>



                      

                
                                 <div class="form-group col-6">
                      <label>Fee</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            $
                          </div>
                        </div>
                        <input type="text" class="form-control currency " name="fee" id="fee" value="{{$book->fee}}"> 
                      </div>
                      <div class="form-control-feedback text-danger"> {{$errors->first('fee') }} </div>
                    </div>
                    


                    </div>
              
               

                    <div class="row">


                      <div class="form-group col-6">

                   <label for="profile1"> Book Photo</label>


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
                <img src="{{asset($book->photo)}}" class="img-fluid" width="100px" height="90px"  style="border-radius: 10px;">
                 <input type="hidden" name="oldimage" value="{{$book->photo}}">
              </div>
              <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
              <input id="profile" type="file" class="form-control-file" name="profile" value="{{$book->profile}}" >
              </div>
            </div>
                    </div>



                          
                   <div class="form-group col-6">

                      <label for="profile2">Latest New Book Photo</label>
                  


                       <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active text-info" id="old-tab" data-toggle="tab" href="#old2" role="tab" aria-controls="old" aria-selected="true">Old Photo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" id="new-tab" data-toggle="tab" href="#new2" role="tab" aria-controls="new" aria-selected="false">New Photo</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="old2" role="tabpanel" aria-labelledby="old-tab">
                <img src="{{asset($book->photo2)}}" class="img-fluid" width="100px" height="90px"  style="border-radius: 10px;">
                 <input type="hidden" name="oldimage2" value="{{$book->photo2}}">
              </div>
              <div class="tab-pane fade" id="new2" role="tabpanel" aria-labelledby="new-tab">
                <input id="profile2" type="file" class="form-control-file" name="profile2"  value="{{$book->profile2}}" >
              </div>
            </div>
                    </div>

                   
                       
                    </div>
                    
                    

                    
                   
              

                                
                  <div class="form-group ">
                      <label for="header">Header</label>
                      <input id="header" type="text" class="form-control" name="header" autofocus placeholder="Enter a Header"  value="{{$book->header}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('header') }} </div>
                    </div>
                   

                    <div class="row">

                      <div class="form-group col-6">
                      <label for="auth_name">Auth_Name</label>
                      <input id="auth_name" type="text" class="form-control" name="auth_name" autofocus placeholder="Enter a Author Name"  value="{{$book->auth_name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('auth_name') }} </div>
                    </div>


                            <div class="form-group col-6">
                      <label for="dob">Date</label>
                      <input id="dob" type="date" class="form-control" name="dob" autofocus  value="{{$book->dob}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>

                    </div>

                      

                   
                      <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" placeholder="Enter Subject"  >{{$book->subject}}</textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
                  </div>
          
                    

                <div class="form-group col-12" style="text-align: center;"> 
                    <button type="submit" class="btn btn-primary btn-lg">
                      UPDATE
                    </button>
                 
                     <a href="{{route('book.index')}}" style="text-decoration: none;">
              <button class="btn btn-danger  btn-lg" type="button">B A C K</button>
            </a>
                  </div>
                </form>
                </div>

              </div>
        </div>
      </div>



        

    


          
        </section>
@endsection