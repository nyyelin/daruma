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

                <form action="{{route('backendabout.update',$about->id)}}" method="post">
                @csrf
                @method('PUT')

                    <div class="row">

                        <div class="form-group col-6">
                      <label for="profile">Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile"value="{{$about->profile}}" >
                      <br>
                        <img src="{{asset($about->photo)}}"  title=" Old Photo" alt="Old Photo"  data-toggle="tooltip" width="55" style="border-radius: 10px;">
                       <input type="hidden" name="oldimage" value="{{$about->id}}">
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
                      <textarea class="form-control s" name="subject" placeholder="Enter Subject" >{{$about->subject}}</textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
                    </div>
                    
                       

                    
                   
                    

                   
                 <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      U P D A T E
                    </button>
                    <br>
                     <a href="{{route('backendabout.index')}}" style="text-decoration: none;">
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