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
                    <option @if($level->id == $level_id) selected="" @endif value="{{$level->id}}" data-name="{{$level->name}}">{{$level->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-md-3">
                <label class="d-block">Start date</label>
                <input type="date" name="start_date" class="form-control start_date" value="{{$start_date}}">
              </div>

              <div class="col-md-3">
                <label class="d-block">End date</label>
                <input type="date" name="start_date" class="form-control end_date" value="{{$end_date}}">
                
              </div>
              <div class="col-md-3">
                
                <button class="btn btn-primary mt-4 search">Search</button>
                
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row table">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
           
            <div class="col-lg-10 "> <h4 class="stuent_list">Student List</h4></div>
             <div class="col-lg-2 ">   
                <div class="form-group mt-2">
           
                </div>
              </div>
       
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="student_list">
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
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
    </div>

  </div>
</section>


{{-- installment modal --}}
<div class="modal fade" id="installmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title rcode" id="exampleModalLabel">Installment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div>
              <h6 class="d-inline-block">Fees :</h6>
              <p class="fees d-inline-block"></p>
            </div>

            <div>
              <h6 class="d-inline-block">Amount :</h6>
              <p class="amount d-inline-block"></p>
            </div>

            <div>
              <h6 class="d-inline-block">Discount :</h6>
              <p class="discount d-inline-block"></p>
            </div>

            <div>
              <h6 class="d-inline-block">Note :</h6>
              <p class="note d-inline-block"></p>
            </div>

          
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

    var level_id = $('.level_id').val();
    var start_date = $('.start_date').val();
    var end_date = $('.end_date').val();
    var html = '';
    var j =1;
    showdata(level_id,start_date,end_date);
    var table = $('#student_list').DataTable();
        table.destroy();


    $('.search').click(function() {
      var level_id = $('.level_id').val();
      var start_date = $('.start_date').val();
      var end_date = $('.end_date').val();
      var html = '';
      var j =1;
      var name = $('.level_id option:selected').data('name');
      $('.stuent_list').html(name + ' Student List');
      var table = $('#student_list').DataTable();
        table.destroy();
      showdata(level_id,start_date,end_date);
      
      
    //   $.post('/getstudentlist',{level_id:level_id,start_date:start_date,end_date:end_date},function(res) {

    //     if(res){
    //     html+=`<div class="col-12">
    //             <div class="card">
    //               <div class="card-header">
                   
    //                 <div class="col-lg-10 "> <h4>${res.level.name} Student List</h4></div>
    //                  <div class="col-lg-2 ">   
    //                     <div class="form-group mt-2">
                   
    //                     </div>
    //                   </div>
               
    //                 </div>
    //               <div class="card-body">
    //                 <div class="table-responsive">
    //                   <table class="table table-striped" id="table-1">
    //                     <thead>
    //                       <tr>
    //                         <th>#</th>
    //                         <th class="text-center">Codeno</th>
    //                         <th>Student Name</th>
    //                         <th>Phone Number</th>
    //                         <th>TimeTable</th>
    //                         <th>Day/Time</th>
    //                         <th>Level</th>
    //                         <th>Action</th>
    //                       </tr>
    //                     </thead>
    //                     <tbody>`;
        
    //       $.each(res.timetables,function(i,v){
    //         $.each(v.students,function(a,b){
    //           if(b.pivot.status == 'Active'){
    //             html+=`<tr>
    //                     <td>
    //                       ${j++}
    //                     </td>
    //                     <td>
    //                       ${b.codeno}
    //                     <td class="align-middle">
    //                       ${b.user.name}
    //                     </td>

    //                     <td class="align-middle">
    //                       ${b.user.name}
    //                     </td>
    //                     <td class="align-middle">
    //                       ${v.name}<br>
    //                       <p class="badge badge-dark text-white">${v.start_date}</p> 
    //                     </td>
                          
    //                     <td class="align-middle">`;

    //         $.each(v.days,function(c,d){
    //           html+=`${d.name}`;
    //           if(v.days.length - 1 == c){
    //             html+=` `;
    //           }else{
    //             html+=` , `
    //           }
              
    //         })
    //               var route = "{{route('students.show',':id')}}";
    //               route= route.replace(':id',b.id);
    //               html+=`<br>
    //                       <p class="badge badge-dark text-white">
    //                       ${v.start_time} - ${v.end_time}
    //                       </p>
    //                     </td>

    //                     <td>
    //                       ${v.level.name}
    //                     </td>
                        
    //                     <td><a href="${route}" class="btn btn-primary">Detail</a>
    //                         <a href="javascript:void(0)" class="btn btn-info btn_installment" data-student_id="${b.id}" data-timetable_id = "${v.id}">Installment</a></td>

    //                   </tr>`
    //           }
    //         })
    //       })
    //       html+=`   </tbody>
    //               </table>
    //             </div>
    //           </div>


    //         </div>
    //       </div>`;
    //       $('.table').html(html);
    //   }
    // })
     })

    // function function_name(argument) {
    //   // body...
    // }

      function showdata(level_id,start_date,end_date){

        console.log(level_id,start_date,end_date);
        if(level_id && start_date  && end_date ){
          var url = '/getstudentlist';
          $('#student_list').dataTable({

            "lengthMenu": [[10, 25, 50, 100, 200 , 300 , 400 , 500], [10, 25, 50, 100, 200 , 300 , 400 , 500]],
            "pageLength": 500,
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true,
            "bStateSave": true,

            "aoColumnDefs": [
            { 'bSortable': false, 'aTargets': [ -1,0] },
           
            ],
            "bserverSide": true,
            "bprocessing":true,
            "ajax": {
              data : {
                
                'level_id':level_id,
                'start_date':start_date,
                'end_date':end_date

              },
              url: url,
              type: "POST",
              dataType:'json',
            },
           
            "columns": [
            {"data":'DT_RowIndex'},
            
            {
              "data":null,
              render:function(data){
                return data.student_codeno
                
              }
            },

            {
              "data":null,
              render:function(data){
                return data.student_name
                
              }
            },
            {
              "data":null,
              render:function(data){
                return data.student_phone
                
              }
            },
            {
              "data":null,
              render:function(data){
                return `<span class="mt-2">${data.timetable_name}</span><br><p class="badge badge-dark text-white">${formatDate(data.timetable_start_date)}</p> `
                
              }
            },

            {
             "data":null,
              render:function(data){
                return `<span class="mt-2">${data.timetable_days}</span><br><p class="badge badge-dark text-white">${data.timetable_start_time} ~ ${data.timetable_end_time}</p> `
                
              }
            },

            {
             "data":null,
              render:function(data){
                return data.timetable_level
                
              }
            },

            {
             "data":null,
              render:function(data){
                var route = "{{route('students_show',':id')}}";
                    route= route.replace(':id',data.id);
                return `
                  <form action="${route}" method="post" class="d-inline-block my-1">
                  @csrf
                  <input type="hidden" value="${level_id}" name="level_id">
                  <input type="hidden" value="${start_date}" name="start_date">
                  <input type="hidden" value="${end_date}" name="end_date">


                    <button type="submit" class="btn btn-primary">D e t a i l</button>
                  </form>
                
                        <a href="javascript:void(0)" class="btn btn-info btn_installment my-1" data-student_id="${data.id}" data-timetable_id = "${data.timetable_id}">Installment</a>`
                
              }
            },
            
           ],


           "info":false
          });
        }
        
      }
     
    




    $("#student_list").on('click','.btn_installment',function(){
      // alert('message?: DOMString');
      var student_id = $(this).data('student_id');
      var timetable_id = $(this).data('timetable_id');
      var html = '';
      $.post('getstudentinstallment',{student_id:student_id,timetable_id:timetable_id},function(data){
        console.log(data);
        if(data){
          console.log(data.payments);
          $.each(data.payments,function(i,v){
            console.log(v);
            $('.fees').html(v.timetable.fees);
            if(v.status == 1){
              var status = "Yen";
            }else{
              var status = "MMK";
            }
            $('.amount').html(v.amount +' '+status);
            $('.discount').html(v.discount +' '+status);
            $('.note').html(v.note);
            
          })
          

          $('#installmentModal').modal('show');
        }
      })
    })

    function formatDate (input) {
        var datePart = input.match(/\d+/g),
        year = datePart[0].substring(0,4), // get only two digits
        month = datePart[1], day = datePart[2];
        return day+'-'+month+'-'+year;
      }

    function thousands_separators(num){
      var num_parts = num.toString().split(".");
      num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      return num_parts.join(".");
    }
  })
</script>
@endsection