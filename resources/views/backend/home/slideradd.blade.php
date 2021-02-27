    @extends('backend_template')
@section('content')
     <section class="section">
  
        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Slider</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('slider.store')}}">
                  @csrf
                  
              <div class="row">
               <div class="form-group col-6">
                      <label for="profile">Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile" value="{{old('photo')}}" >
                    </div>

                  <div class="form-group col-6">
                      <label for="name">Header</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter Name" value="{{old('name')}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>

               </div>

                    <div class="row">
                    <div class="form-group col-12">
                      <label for="frist_name">Subject</label>
                      <textarea class="form-control" name="subject" id="summernote" placeholder="Enter Subject" value="{{old('subject')}}"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('subject') }} </div>
                    </div>
                  </div>
                   
                   
                   
          
                    
                    
                 
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      S A V E
                    </button>
                  </div>
                </form>
                </div>
              </div>
        </div>
      </div>




        

    


          
        </section>
@endsection