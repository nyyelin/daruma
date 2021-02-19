    @extends('backend_template')
@section('content')
<section class="section">
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card author-box">
              <div class="card-body">
                <div class="author-box-center">
                  <img alt="image" src="{{asset ($student->photo)}}" class="rounded-circle author-box-picture">
                  <div class="clearfix"></div>
                  <div class="author-box-name">
                  
                  </div>
                  <div class="author-box-job"></div>
                </div>
                <div class="text-center">
                  <div class="author-box-description">
                   <div class="author-box-name">
                    <a href="#">{{$student->user->name}}</a>
                  </div>
                  <div class="author-box-name my-3">
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{route('students.destroy',$student->id)}}" method="post" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure to delete this student?')"><i class="fas fa-trash"></i></button>
                    </form>
                    

                  </div>
                  </div>
                 
                  <div class="w-100 d-sm-none"></div>
                </div>
              </div>
            </div>

            
            <div class="card">
              <div class="card-header">
                <h4 class="d-inline-block">Japanese Level </h4><button class="btn btn-outline-warning btn-sm btn_edit"><i class="fas fa-edit"></i></button>
                <button class="btn btn-outline-secondary btn-sm btn_close"><i class="fas fa-times"></i></button>
              </div>
              <div class="card-body">
                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">

                  @foreach($student->timetables as $timetable)
                  <li class="media">
                    <div class="media-body">
                      <div class="media-title">
                        @if($timetable->pivot->status == "Active")
                        <button class="btn btn-outline-danger btn-sm btn_trash mr-2" data-student_id = "{{$student->id}}" data-timetable_id = "{{$timetable->id}}" onclick="return confirm('Are you sure?')">
                          <i class="fas fa-trash" ></i></button>
                          @endif
                          {{$timetable->level->name}}
                        </div>
                    </div>
                    <div class="media-progressbar p-t-10">
                      <div class="progress" data-height="6">
                        @if($timetable->pivot->status == "Active")
                        <div class="progress-bar bg-success" data-width="100%"></div>
                        @else
                        <div class="progress-bar bg-danger" data-width="100%"></div>
                        @endif
                      </div>
                    </div>
                  </li>
                  @endforeach

                </ul>
              </div>
            </div>

          </div>


          <div class="col-12 col-md-12 col-lg-8">
            <div class="card">
              <div class="padding-20">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                      aria-selected="true">About</a>
                  </li>
                  
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                  <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                    <div class="row mt-2">
                      <div class="col-md-12">
                         
                          <h5 class="float-left">
                            Codeno
                          </h5>
                          <h6 class="float-right">
                            {{$student->codeno}}
                          </h6>
                        
                      </div>
                     
                    </div>
                   
                    <div class="py-4">
                       <p class="clearfix">
                        <span class="float-left">
                          Name
                        </span>
                        <span class="float-right">
                          {{$student->user->name}}
                        </span>
                      </p>

                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right">
                          {{$student->user->phone}}
                        </span>
                      </p>

                      <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right">
                          {{date('d/m/Y',strtotime($student->dob))}}
                        </span>
                      </p>
                      
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right">
                          @if($student->user->email)
                          {{$student->user->email}}
                          @else
                          -
                          @endif
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Address
                        </span>
                        <span class="float-right ">
                          {{$student->address}}
                        </span>
                      </p>
                      
                    </div>
             
                
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
  $(document).ready(function () {

    $.ajaxSetup({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $('.btn_trash').hide();
    $('.btn_close').hide();
    $('.btn_edit').click(function(){
      $('.btn_trash').show(1000);
      $('.btn_close').show(1000);
      $('.btn_edit').hide(1000);
    })

    $('.btn_close').click(function(){
      $('.btn_trash').hide(1000);
      $('.btn_close').hide(1000);
      $('.btn_edit').show(1000);
    })

    $('.btn_trash').click(function() {
      var student_id = $(this).data('student_id');
      var timetable_id = $(this).data('timetable_id');
      $.post('/deletestudenttimetable',{student_id:student_id,timetable_id:timetable_id},function (res) {
        if(res){
          location.reload();
        }
      })

    })
  })
</script>
@endsection