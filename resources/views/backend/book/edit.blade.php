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
                      <label for="profile">Book Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" value="{{$book->profile}}" >
                      <br>
                       <img src="{{asset($book->photo)}}"  title=" Old Photo" alt="Old Photo"  data-toggle="tooltip" width="55" style="border-radius: 10px;">
                       <input type="hidden" name="oldimage" value="{{$book->id}}">
                    </div>



                          
                   <div class="form-group col-6">
                      <label for="profile2">Latest New Book Photo</label>
                      <input id="profile2" type="file" class="form-control-file" name="profile2"  value="{{$book->profile2}}" >
                      <br>
                       <img src="{{asset($book->photo2)}}"  title=" Old Photo" alt="Old Photo"  data-toggle="tooltip" width="55" style="border-radius: 10px;">
                       <input type="hidden" name="oldimage2" value="{{$book->id}}">
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
          
                    
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      U P D A T E
                    </button>
                    <br>
                     <a href="{{route('book.index')}}" style="text-decoration: none;">
              <button class="btn btn-danger  btn-lg btn-block" type="button">B a c k</button>
            </a>
                  </div>
                </form>
                </div>

              </div>
        </div>
      </div>



        

    


          
        </section>
@endsection