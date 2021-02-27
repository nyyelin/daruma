@extends('backend_template')
@section('content')
  
  
<section class="section">

  <form action="{{route('timetables.store')}}" method="post">
    @csrf
    <div class="row">
      <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>Class Timetables</h4>
          </div>
          <div class="card-body">
          
            <div class="row">
              <div class="col-lg-6">      
                <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" class="form-control" placeholder="Enter Class Name" name="name" value="{{old('name')}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                </div>
              </div>
              <div class="col-lg-6">
                    
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                      @foreach($levels as $level)
                      <option value="{{$level->id}}">{{$level->name}}</option>
                      @endforeach
                    </select>
                    <div class="form-control-feedback text-danger"> {{$errors->first('level') }} </div>

                </div>
              </div>
            </div>

            <div class="row">
      <div class="col-lg-6">
                <div class="form-group">
                  <label>Fee</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        $
                      </div>
                    </div>
                    <input type="text" class="form-control currency" name="fee" value="0" value="{{old('fee')}}">
                  </div>
                  <div class="form-control-feedback text-danger"> {{$errors->first('fee') }} </div>

                </div>
              </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="startdate" class="form-control" value="{{old('startdate')}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('startdate') }} </div>

                  </div>
                </div>


                <div class="col-lg-3">
                  
                   <div class="form-group">
                    <label>Duration</label>
                    <select class="form-control selectric" name="duration">
                      <option>1 Month</option>
                      <option>2 Months</option>
                      <option>3 Months</option>
                      <option>4 Months</option>
                      <option>5 Months</option>
                      <option>6 Months</option>
                    </select>
                  </div>
                </div>

            </div>


            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>From</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-clock"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control timepicker" name="start_time" value="{{old('start_time')}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('start_time') }} </div>

                  </div>
                </div>
              </div>
           

              <div class="col-lg-6">
                 <div class="form-group">
                  <label>To</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-clock"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control timepicker" name="end_time" value="{{old('end_time')}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('end_time') }} </div>


                  </div>
                </div>
              </div>
                   
            </div>

            <div class="row">


                <div class="col-lg-6"> <div class="form-group">
                      <label>Day</label>
                      <select class="form-control selectric" multiple="" name="day[]">
                        <optgroup>
                          @foreach($days as $day)
                            <option value="{{$day->id}}">{{$day->name}}</option>
                          @endforeach
                        </optgroup>
                      </select>
                      <div class="form-control-feedback text-danger"> {{$errors->first('day') }} </div>

                    </div>
                </div>

        


              <div class="col-lg-6">
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="class_type">
                    <option value="1">Online</option>
                    <option value="2">Offline</option>
                    <option value="3">Online/Offline</option>
                  </select>
                </div>
              </div>
                  
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control"  name="description">
                    @if(old('description'))
                      {{old('description')}}
                    @endif
                  </textarea>
                </div>
              </div>
            </div>
          </div>
             

          <div class="card-footer text-center">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <a href="{{route('timetables.index')}}">
              <button class="btn btn-danger mr-1" type="button">Back</button>
            </a>

          </div>


       
        </div>
      </div>
    </div>
  </form>









  
</section>

@endsection