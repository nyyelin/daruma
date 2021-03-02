    @extends('frontend_template')
@section('content')
  <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>Regular Classes</li>
        </ol>
        <h2>Regular Classes</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->

    <section class="blog knowledge">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 entries">

            <article class="entry">

              <div class="row content table-responsive ml-1" data-aos="fade-up">
          <div class="container">
            <div class="bd-example">
              <table class="table table-bordered table-hover">
                  <thead>
                <tr>
                  <th scope="col">CLASS</th>
                  <th scope="col">STARTING</th>
                  <th scope="col">DAYS</th>
                  <th scope="col">TIME</th>
                  <th scope="col">DURATION</th>
                  <th scope="col">FEE</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($timetables as $timetable)
                 @if($timetable->status ==2)
                <tr>
                  <th scope="row">{{$timetable->name}}</th>
                  <td>{{$timetable->start_date}}</td>
                  <td>
                    @foreach($timetable->days as $day)
                    {{ $loop->first ? '' : ', ' }}
                      {{$day->name}}

                    @endforeach
                  </td>
                  <td>{{$timetable->start_time}} ~ {{$timetable->end_time}}</td>
                  <td >
                    {{$timetable->duration}}
                  </td>
                 <td>{{$timetable->fees}}</td>
                </tr>
              
                @endif
                @endforeach
              </tbody>

              </table>
            </div>
          </div>
          <div class="col-lg-12">
            <p><b>
              ### ဖတ်စာအုပ်၊စာရွက်စာတမ်းကြေး အပြီးအစီးဖြစ်ပါသည်။</b>
            </p>
           <!--  <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul> -->
          </div>

        <a href="https://www.facebook.com/su.tun.98"><button type="button" class="btn btn-danger" style="float: right;">သင်တန်းအပ်နှံလိုပါက ဆက်သွယ်စုံစမ်းနိုင်ပါသည်</button></a>
          
        </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          

        </div>

      </div>
    </section><!-- End Blog Section -->


  </main><!-- End #main -->
@endsection