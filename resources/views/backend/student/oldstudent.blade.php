@extends('backend_template')
@section('content')
          
 <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>New Student Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{route('student.oldstudentstore')}}">
                  @csrf

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="codeno">Code</label>
                      <input id="codeno" type="text" class="form-control codeno" name="codeno" autofocus placeholder="Enter Codeno" value="{{old('codeno')}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('codeno') }} </div>

                    </div>
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control name" name="name" autofocus placeholder="Enter Name" value="{{old('name')}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control email" name="email" autofocus placeholder="Enter Name" value="{{old('email')}}">
                      <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>

                    </div>
                    <div class="form-group col-6">
                      <label for="phone">Phone Number</label>
                      <input id="phone" type="number" class="form-control phone" name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>

                    </div>
                  </div>

                  {{-- <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" placeholder="Enter Password" value="{{old('password')}}">

                        <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>

                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" value="{{old('password_confirmation')}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('password_confirmation') }} </div>

                    </div>
                  </div> --}}

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="gender" class="d-block">Gender</label>
                      <input type="radio" name="gender" value="Male" checked="" id="male" class="male"><label for="male" class="ml-2">Male</label>
                      <input type="radio" name="gender" value="Female" id="female" class="female"><label for="male" class="ml-2">Female</label>

                      <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Address</label>
                      <textarea class="form-control address" name="address"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="dob" class="d-block">DOB</label>
                      <input id="dob" type="date" class="form-control dob" name="dob"  value="{{old('dob')}}">

                      <div class="form-control-feedback text-danger"> {{$errors->first('dob') }} </div>
                    </div>
                  </div>

                 <div class="row form-group">
                  
                  <div class="col-md-6">
                      <label for="email">Class</label>
                      <select class="form-control level" name="level">
                        @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->name}}</option>
                        @endforeach
                      </select>
                      <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-6">
                
                    <label>Time Table</label>
                    <select class="form-control  timetable_option" name="timetable">
                    <option>Choose timetable</option>
                    @foreach($timetables as $timetable)
                      <option value="{{$timetable->id}}">{{$timetable->name}} ( {{date('d / m / Y',strtotime($timetable->start_date))}} )</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                    <div class="form-group">
                      <label>Day</label>
                      <select class="form-control js-example-basic-multiple days" multiple="">
                        
                        @foreach($days as $day)
                        <option value="{{$day->id}}" >{{$day->name}}</option>
                        @endforeach
                      </select>
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
                          <input type="text" class="form-control timepicker start_time" disabled="">
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
                          <input type="text" class="form-control timepicker end_time" disabled="">
                        </div>
                      </div>
                    </div>
      
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Type</label>
                        <div class="input-group">
                          <input type="text" class="form-control type" disabled="">
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Fee</label>
                        <div class="input-group">
                          <input type="text" class="form-control fee" disabled="">
                        </div>
                      </div>
                    </div>

                  </div>

                  <input type="checkbox" name="discount" id="inputdiscount" class="discount">
                  <label class="ml-3 text-dark" for="inputdiscount">Discount</label>

                  <div class="row">
                    <div class="col-md-6">

                      <div class="form-group installment_show">
                        <label>Payment</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              $
                            </div>
                          </div>
                          <input type="text" class="form-control currency installment" name="installment" placeholder="Enter Installment Amount">
                        </div>
                      </div>

                      <div class="form-group discount_show">
                        <label>Discount</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              $
                            </div>
                          </div>
                          <input type="text" class="form-control currency" name="discount" placeholder="Enter Discount Amount">
                        </div>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Payment Type</label>
                          <select class="form-control selectric" name="paymenttype">
                            <option value="1">Japan (Yen)</option>
                            <option value="2">Myanmar (MMK)</option>
                           
                          </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="password" class="d-block">Note</label>
                      <textarea class="form-control" name="note"></textarea>
                      <div class="form-control-feedback text-danger"> {{$errors->first('note') }} </div>
                  </div>
                   
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </section>
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

    $('.discount_show').hide();
    $('.installment_show').show();

    $('.level').change(function(){
      var level_id = $(this).val();
      var html = "";
      
      $.post('/gettimetablebylevel',{level_id:level_id},function(res) {
        
        if(res){
          
          $.each(res,function(i,v){
            
            html += `
              <option>Choose timetable</option>
              <option value="${v.id}" name="timetable">${v.name} ( ${formatDate(v.start_date)} )</option>`;
          });
         
          $('.timetable_option').html(html);
        }

      })

    })

    $('.timetable_option').change(function() {
        var id = $(this).val();
        var html = '';
        $.post('/getdatabytimetable',{id:id},function(data) {
          
          if(data){
            $('.days').prop('disabled',false);
            // $('.selectric-days').removeClass('selectric-disabled');
            
            $('.start_time').val(data.timetables.start_time);
            $('.end_time').val(data.timetables.end_time);
            $('.fee').val(data.timetables.fees);
            if(data.timetables.status == 1){
              $('.type').val('Online');
            }else if(data.timetables.status == 2){
              $('.type').val('Offline');
            }else if(data.timetables.status == 3){
              $('.type').val('Online/Offline');
            }
            

            $.each(data.days,function(i,v){
              if(v.id == 8){
                html+=`<option value="${v.id}">${v.name}</option>`
              }else{
                $.each(data.timetables.days,function(a,b){
                  if(b.pivot.day_id == v.id){
                     html+=`<option value="${v.id}" selected>${v.name}</option>`
                  }
                })
              }

              
            })

            $('.days').html(html);

          }
        })
    });

    $('.codeno').change(function(){
      var codeno = $(this).val();
      var html = '';
      $.post('/getstudentbycodeno',{codeno:codeno},function(res){
        $('.name').val(res.student.user.name);
        $('.email').val(res.student.user.email);
        $('.phone').val(res.student.user.phone);
        $('.dob').val(res.student.dob);
        $('.address').text(res.student.address);
        if(res.student.gender == "Male"){
          $('.male').attr('checked','checked');

        }else if(res.student.gender == "Female"){
          $('.female').attr('checked','checked');
        }

        $.each(res.levels,function(i,v){

          html+=`<option value="${v.id}">${v.name}`;

          $.each(res.student.timetables,function(a,b){
            if(b.level_id == v.id){
              html+=`  ( o )`;
            }
          })
          html+= `</option>`;
        })
        $('.level').html(html);
      })
    })

    $('.discount').click(function(){
      if($('.discount').is(':checked')){
        $('.discount_show').show();
        $('.installment_show').hide();
      }else{
        $('.discount_show').hide();
        $('.installment_show').show();
      }
    })

    function formatDate (input) {
        var datePart = input.match(/\d+/g),
        year = datePart[0].substring(0,4), // get only two digits
        month = datePart[1], day = datePart[2];
        return day+'/'+month+'/'+year;
      }

  })
</script>
@endsection










