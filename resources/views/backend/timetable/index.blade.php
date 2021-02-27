@extends('backend_template')
@section('content')
  
  
<section class="section">
  @if(session('msg'))
  <div class="alert alert-success alert_msg">
    <span>{{session('msg')}}</span>
  </div>
  @endif

   <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="col-lg-10"> 
          <h4>Class Timetables</h4>
        </div>
           <div class="col-lg-2 "> 
            <a href="{{route('timetables.create')}}"> <button class="btn btn-primary " type="button">+ Add </button></a></div>
          
          </div>
        <div class="card-body">
          {{-- <div class="row my-3">
            <div class="col-md-4">
              <label>Start Date</label>
              <input type="date" name="startdate" class="start_date form-control" >
            </div>
            <div class="col-md-4">
              <label>End Date</label>
              <input type="date" name="enddate" class="end_date form-control" >
            </div>
            <div class="col-md-4 mt-4">
              <button class="btn btn-success btn_search">Search</button>
            </div>
          </div> --}}
          <div class="table-responsive">
            <table class="table table-striped dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  
                  <th>Class</th>
                  <th>Level</th>
                  <th>Starting Date</th>
                  <th>Days</th>
                  <th>Time</th>
                  <th>Duration</th>
                  <th>Fee</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($timetables as $timetable)
                @php
                  $start_date = date('d / m / Y',strtotime($timetable->start_date));
                  $end_date = date('d / m / Y',strtotime($timetable->end_date));

                @endphp
                <tr>
                  
                  <td>{{$i++}}</td>
                  <td>{{$timetable->name}}<br>
                  @if($timetable->status ==1)
                      <span class="badge badge-dark">Online</span>
                    @elseif($timetable->status ==2)
                      <span class="badge badge-dark">Offline</span>
                    @elseif($timetable->status ==3)
                      <span class="badge badge-dark">Online/Offline</span>
                    @endif</td>
                  <td>{{$timetable->level->name}}</td>
                  <td class="text-truncate">
                    {{$start_date}}
                  </td>
                  <td>
                    @foreach($timetable->days as $day)
                    {{ $loop->first ? '' : ', ' }}
                      {{$day->name}}

                    @endforeach
                  </td>
                  <td>{{$timetable->start_time}} ~ {{$timetable->end_time}}</td>
                  <td class="align-middle">
                    {{$timetable->duration}}
                  </td>
                 <td>{{$timetable->fees}}</td>
                  <td>
                    <a href="javascript:void(0)" class="btn btn-info btn_detail" data-name="{{$timetable->name}}" data-level = "{{$timetable->level->name}}" data-start_date = "{{$start_date}}" data-start_time = "{{$timetable->start_time}}" data-end_time = "{{$timetable->end_time}}" data-duration="{{$timetable->duration}}" data-fee = "{{$timetable->fees}}" data-description = "{{$timetable->description}}" data-day="{{$timetable->days}}" data-status="{{$timetable->status}}" data-end_date = "{{$end_date}}">Detail</a>

                    <a href="{{route('timetables.edit',$timetable->id)}}" class="btn btn-warning">Edit</a>

                    <form action="{{route('timetables.destroy',$timetable->id)}}" method="post" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete')">Delete</button>
                    </form>
                    
                  </td>
                </tr>
                
                @endforeach
              </tbody>
         
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

{{-- detail modal --}}
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title detail_name d-inline-block" id="exampleModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="d-inline-block">Level : </h6> <p class="detail_level d-inline-block mr-2"></p>( <span class="type ">d</span> )<br>
        <h6 class="d-inline-block">Start_date : </h6> <p class="detail_start_date d-inline-block"></p><br>
        <h6 class="d-inline-block">End_date : </h6> <p class="detail_end_date d-inline-block"></p><br>

        <h6 class="d-inline-block">Time : </h6> <p class="detail_time d-inline-block"></p><br>
        <h6 class="d-inline-block">Days : </h6> <p class="detail_days d-inline-block"></p><br>
        <h6 class="d-inline-block">Duration : </h6> <p class="detail_duration d-inline-block"></p><br>
        <h6 class="d-inline-block">Fee : </h6> <p class="detail_fee d-inline-block"></p><br>
        <h6 class="d-inline-block">Description : </h6> <p class="detail_description d-inline-block"></p><br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-dark" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });



    $('.alert_msg').hide(3000);

    $('.btn_detail').click(function(){
      var name = $(this).data('name');
      var level = $(this).data('level');
      var start_date = $(this).data('start_date');
      var end_date = $(this).data('end_date');

      var start_time = $(this).data('start_time');
      var end_time = $(this).data('end_time');
      var duration = $(this).data('duration');
      var fee = $(this).data('fee');
      var description = $(this).data('description');
      var days = $(this).data('day');
      var status = $(this).data('status');
      var html = '';
      $('.detail_name').text(name);
      $('.detail_level').text(level);
      $('.detail_start_date').text(start_date);
      $('.detail_end_date').text(end_date);

      $('.detail_time').text(start_time+' ~ '+end_time);
      $('.detail_duration').text(duration);
      $('.detail_fee').text(fee);
      $('.detail_description').text(description);
      if(status == 1){
        $('.type').text('Online');
      }
      else if(status == 2){
        $('.type').text('Offline');
      }
      else if(status == 3){
        $('.type').text('Online/Offline');
      }

      $.each(days,function(i,v) {

        html+=`${v.name}`;
        if(days.length - 1 == i){
          html+=``;
        }else{
          html+=`,`;
        }

      })

      $('.detail_days').html(html);
      $('#detailModal').modal('show');


    })

   


  })
</script>
@endsection