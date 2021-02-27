@extends('backend_template')
@section('content')

<section class="section">

  <form action="{{route('timetables.update',$timetable->id)}}" method="post">
    
    @csrf
    @method('PUT')
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
                    <input type="text" class="form-control" placeholder="Enter Class Name" name="name" value="{{$timetable->name}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
                </div>
              </div>
              <div class="col-lg-6">
                    
                <div class="form-group">
                    <label>Level</label>
                    <select class="form-control" name="level">
                      @foreach($levels as $level)
                      <option value="{{$level->id}}" @if($level->id == $timetable->level_id) selected="selected" @endif>{{$level->name}}</option>
                      @endforeach
                    </select>
                    <div class="form-control-feedback text-danger"> {{$errors->first('level') }} </div>

                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-6"> <div class="form-group">
                      <label>Day</label>
                      <select class="form-control selectric" multiple="" name="day[]">
                        <optgroup>
                          @foreach($days as $day)
                            <option value="{{$day->id}}" @foreach($timetable->days as $timetable_day) @if($timetable_day->id == $day->id) selected="selected" @endif @endforeach>{{$day->name}}</option>
                          @endforeach
                        </optgroup>
                      </select>
                      <div class="form-control-feedback text-danger"> {{$errors->first('day') }} </div>

                    </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="startdate" class="form-control" value="{{$timetable->start_date}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('startdate') }} </div>

                  </div>
                </div>


                <div class="col-lg-3">
                  
                   <div class="form-group">
                    <label>Duration</label>
                    <select class="form-control selectric" name="duration">
                      <option @if($timetable->duration == '1 Month') selected="selected" @endif>1 Month</option>
                      <option @if($timetable->duration == '2 Months') selected="selected" @endif>2 Months</option>
                      <option @if($timetable->duration == '3 Months') selected="selected" @endif>3 Months</option>
                      <option @if($timetable->duration == '4 Months') selected="selected" @endif>4 Months</option>
                      <option @if($timetable->duration == '5 Months') selected="selected" @endif>5 Months</option>
                      <option @if($timetable->duration == '6 Months') selected="selected" @endif>6 Months</option>
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
                    <input type="text" class="form-control timepicker" name="start_time" value="{{$timetable->start_time}}">
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
                    <input type="text" class="form-control timepicker" name="end_time" value="{{$timetable->end_time}}">
                    <div class="form-control-feedback text-danger"> {{$errors->first('end_time') }} </div>


                  </div>
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
                    <input type="text" class="form-control currency" name="fee" value="{{$timetable->fees}}">
                  </div>
                  <div class="form-control-feedback text-danger"> {{$errors->first('fee') }} </div>

                </div>
              </div>


              <div class="col-lg-6">
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="class_type">
                    <option value="1" @if($timetable->status ==1 ) selected="selected" @endif>Online</option>
                    <option value="2" @if($timetable->status ==2 ) selected="selected" @endif>Offline</option>
                    <option value="3" @if($timetable->status ==3 ) selected="selected" @endif>Online/Offline</option>
                  </select>
                </div>
              </div>
                  
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control"  name="description">
                    {{$timetable->description}}
                  </textarea>
                </div>
              </div>
            </div>
          </div>
             

          <div class="card-footer text-center ">
            <button class="btn btn-primary mr-1" type="submit">UPDATE</button>
            <a href="{{route('timetables.index')}}">
              <button class="btn btn-danger mr-1" type="button">B A C K</button>
            </a>

          </div>


       
        </div>
      </div>
    </div>
  </form>









  
</section>

@endsection