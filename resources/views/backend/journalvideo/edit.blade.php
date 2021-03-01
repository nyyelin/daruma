    @extends('backend_template')
@section('content')
      
        <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Detail Journal & Video</h4>
                  </div>
                  <div class="card-body">
                   
         <form method="POST" enctype="multipart/form-data" action="{{route('backendaddjournalvideo.update',$addjournalvideo->id)}}">
                  @csrf         
                      @method('PUT')      
                   


                    <div class="row">
                      <input type="hidden" name="detail_id" value="{{$addjournalvideo->detail_id}}">


                      <div class="form-group col-6">
                      <label for="profile">Detail Photo (OR) Video</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" >
                    </div>



               <div class="form-group col-6">
                      <label for="auth_name">Auth_Name</label>
                      <input id="auth_name" type="text" class="form-control" name="auth_name" autofocus placeholder="Enter a Author Name"  value="{{$addjournalvideo->auth_name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('auth_name') }} </div>
                    </div>

                   
                       
                    </div>



                   <div class="row">


                    
                



                      

                
                      <div class="form-group col-6">
                      <label for="header">Header</label>
                      <input id="header" type="text" class="form-control" name="header" autofocus placeholder="Enter a Header"  value="{{$addjournalvideo->header}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('header') }} </div>
                    </div>



                                <div class="form-group col-6">
                      <label for="dob">Date</label>
                      <input id="dob" type="date" class="form-control" name="dob" autofocus  value="{{$addjournalvideo->dob}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>
                   
                    


                    </div>
              
    
                <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" id="summernote" placeholder="Enter Subject"  value="">{{$addjournalvideo->subject}}</textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
                  </div>
          
                    
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                     U P D A T E
                    </button>
                  </div>
                </form>
                </div>

              </div>
        </div>
      </div>



        

    


          
        </section>
@endsection