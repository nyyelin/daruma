    @extends('backend_template')
@section('content')
  <section class="section">
  

        <div class="row">
           <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Gallery</h4>
                  </div>
                  <div class="card-body">
                   
                <form action="{{route('backendgallery.update',$gallery->id)}}" method="post">
    
                  @csrf
                  @method('PUT')     
              
                    <div class="row">


                    <div class="form-group col-6">
                      <label for="profile">Class Photo</label>
                      <input id="profile" type="file" class="form-control-file" name="profile"  value="{{$gallery->photo}}">
                       <br>
                        <img src="{{asset($gallery->photo)}}"  title=" Old Photo" alt="Old Photo"  data-toggle="tooltip" width="55" style="border-radius: 10px;">
                       <input type="hidden" name="oldimage" value="{{$gallery->id}}">
                    </div>


                                        
                  <div class="form-group col-6">
                      <label for="name"> Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter a Class Name" value="{{$gallery->name}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                    </div>




                    </div>
              
               <div class="form-group">
                    <label for="class">Class</label>
                   <select class="form-control selectric" name="class" >
                        <option @if($gallery->class == 'N1 Class') selected="selected" @endif>N1 Class</option>
                        <option @if($gallery->class == 'N2 Class') selected="selected" @endif>N2 Class</option>
                        <option @if($gallery->class == 'N3 Class') selected="selected" @endif>N3 Class</option>
                        <option @if($gallery->class == 'N4 Class') selected="selected" @endif">N4 Class</option>
                        <option @if($gallery->class == 'N5 Class') selected="selected" @endif>N5 Class</option>
                        <option @if($gallery->class == 'Special Only Class') selected="selected" @endif>Special Only Class</option>
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="categories">Categories</label>
                   <select class="form-control selectric" name="categories" value="{{$gallery->categories}}">
                        <option @if($gallery->categories == 'Class Photo') selected="selected" @endif>Class Photo</option>
                        <option @if($gallery->categories == 'Other Photo') selected="selected" @endif>Other Photo</option>
                        
                      </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    
                   
               
                    
                       

                    
                   
                    

                   
                    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      U P D A T E
                    </button>
                     <br>
                     <a href="{{route('backendgallery.index')}}" style="text-decoration: none;">
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