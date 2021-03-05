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
                      <label for="profile">Detail Photo </label>
                     







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
                <img src="{{asset($addjournalvideo->photo)}}" class="img-fluid" width="100px" height="90px"  style="border-radius: 10px;">
                  <input type="hidden" name="oldimage" value="{{$addjournalvideo->photo}}">
              </div>
              <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
             <input id="profile" type="file" class="form-control-file" name="profile"  value="{{$addjournalvideo->photo}}">
             
              </div>
            </div>

                    </div>













                      <div class="form-group col-6">
                      <label for="profile2"> Video</label>
                      <input id="profile2" type="file" class="form-control-file" name="profile2" >
                    </div>



          

                   
                       
                    </div>

                             <div class="row">



     <div class="form-group col-6">
                      <label for="auth_name">Auth_Name</label>
                      <input id="auth_name" type="text" class="form-control" name="auth_name" autofocus placeholder="Enter a Author Name"  value="{{$addjournalvideo->auth_name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('auth_name') }} </div>
                    </div>

                    


                                 <div class="form-group col-6">
                    <label for="popular">Poular Post</label>
                   <select class="form-control selectric" name="popular" value="{{old('popular')}}">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                        
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                   

                      <div class="form-group col-6">
                    <label for="popular">Poular Post</label>
                   <select class="form-control selectric" name="popular" value="{{$addjournalvideo->popular}}">
                        <option @if($addjournalvideo->popular == 'YES') selected="selected" @endif>YES</option>
                        <option @if($addjournalvideo->popular == 'NO') selected="selected" @endif>NO</option>
                        
                      </select>
                    <div class="invalid-feedback">
                    </div>
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