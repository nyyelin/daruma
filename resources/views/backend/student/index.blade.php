@extends('backend_template')
@section('content')
<section class="section">
  <div class="section-body">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label class="d-block">Level</label>
                <select class="form-control level_id">
                  {{-- <option value="" data-level="0">Choose Level</option> --}}
                  @foreach($levels as $level)
                    <option value="{{$level->id}}">{{$level->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-3">
                <label class="d-block">Start date</label>
                <input type="date" name="start_date" class="form-control start_date">
              </div>

              <div class="col-md-3">
                <label class="d-block">End date</label>
                <input type="date" name="start_date" class="form-control end_date">
                
              </div>
              <div class="col-md-3">
                
                <button class="btn btn-primary mt-4 search">Search</button>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
           
            <div class="col-lg-10 "> <h4 class="student">Student List</h4></div>
             <div class="col-lg-2 ">   
                <div class="form-group mt-2">
           
                </div>
              </div>
       
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="table-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="text-center">Codeno</th>
                    <th>Student Name</th>
                    <th>Phone Number</th>
                    <th>TimeTable</th>
                    <th>Day/Time</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="tbody">
                  @php
                    $i = 1;
                  @endphp
                  @foreach($students as $student)
                  @foreach($student->timetables as $timetable)
                    @if($timetable->pivot->status == "Active" && $timetable->start_date >= Carbon\Carbon::today())

                      <tr>
                        <td>
                          {{$i++}}
                        </td>
                        <td>
                          {{$student->codeno}}
                        <td class="align-middle">
                          {{$student->user->name}}
                        </td>

                        <td class="align-middle">
                          {{$student->user->phone}}
                        </td>
                        <td class="align-middle">
                          {{$timetable->name}}<br>
                          <p class="badge badge-dark text-white">{{date('d/m/Y',strtotime($timetable->start_date))}}</p> 
                        </td>
                          
                        <td class="align-middle">
                          @foreach($timetable->days as $day)
                            {{ $loop->first ? '' : ', ' }}
                            {{$day->name}}
                          @endforeach
                          <br>
                          <p class="badge badge-dark text-white">
                          {{$timetable->start_time}} - {{$timetable->end_time}}
                          </p>
                        </td>

                        <td>
                          {{$timetable->level->name}}
                        </td>
                        
                        <td><a href="{{route('students.show',$student->id)}}" class="btn btn-primary">Detail</a></td>
                      </tr>
                    @endif

                    @endforeach
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>
</section>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){

    $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


    $('.search').click(function() {
      var level_id = $('.level_id').val();
      var start_date = $('.start_date').val();
      var end_date = $('.end_date').val();
      var html = '';
      var i =1;
      
      
      $.post('/getstudentlist',{level_id:level_id,start_date:start_date,end_date:end_date},function(res) {
        if(res){
          $('.student').html(res.level.name + ' Student List');
          $.each(res.timetables,function(i,v){
            $.each(v.students,function(a,b){
              if(b.pivot.status == 'Active'){
                html+=`<tr>
                        <td>
                          ${i++}
                        </td>
                        <td>
                          ${b.codeno}
                        <td class="align-middle">
                          ${b.user.name}
                        </td>

                        <td class="align-middle">
                          ${b.user.name}
                        </td>
                        <td class="align-middle">
                          ${v.name}<br>
                          <p class="badge badge-dark text-white">${v.start_date}</p> 
                        </td>
                          
                        <td class="align-middle">`;

            $.each(v.days,function(c,d){
              html+=`${d.name}`;
              if(v.days.length - 1 == c){
                html+=` `;
              }else{
                html+=` , `
              }
              
            })
                          
                  html+=`<br>
                          <p class="badge badge-dark text-white">
                          ${v.start_time} - ${v.end_time}
                          </p>
                        </td>

                        <td>
                          ${v.level.name}
                        </td>
                        
                        <td><a href="{{route('students.show',$student->id)}}" class="btn btn-primary">Detail</a></td>
                      </tr>`
              }
            })
          })
          $('.tbody').html(html);
        }
        
      })
    })
  })
</script>
@endsection