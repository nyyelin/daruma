    @extends('frontend_template')
@section('content')
  <main id="mainn">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('main')}}">Home</a></li>
          <li>All Class</li>
        </ol>
        <h2>All Class</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" style="margin-bottom: 20px;">
            <a href="{{route('onlineclass')}}">
            <button type="button" class="btn btn-danger" style="margin-right: 10px;">Online Class</button>
            </a>
             <a href="{{route('regularclass')}}">
            <button type="button" class="btn btn-danger">Regular Class</button>
          </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-all" class="filter-active">All</li>
              <li data-filter=".filter-app">N-5</li>
              <li data-filter=".filter-card">N-4</li>
              <li data-filter=".filter-web">N-3</li>
              <li data-filter=".filter-cardd">N-2</li>
              <li data-filter=".filter-webb">N-1</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container table-responsive ">






          <div class="col-lg-12 col-md-12 portfolio-item filter-all ">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
          <div class="container">
            <div class="bd-example">
              <table class="table table-bordered table-hover ">
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
                @endforeach
              </tbody>

              </table>
            </div>
          </div>
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>





























  <div class="col-lg-12 col-md-12 portfolio-item filter-app">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
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
                 @if($timetable->level_id ==5)
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
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>














<div class="col-lg-12 col-md-12 portfolio-item filter-card">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
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
                 @if($timetable->level_id ==4)
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
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>











<div class="col-lg-12 col-md-12 portfolio-item filter-web">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
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
                 @if($timetable->level_id ==3)
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
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>




<div class="col-lg-12 col-md-12 portfolio-item filter-cardd">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
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
                 @if($timetable->level_id ==2)
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
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>









<div class="col-lg-12 col-md-12 portfolio-item filter-webb">
            <!-- <div class="portfolio-wrap"> -->
              <div class="row content" >
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
                 @if($timetable->level_id ==1)
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
         <!--  <div class="col-lg-12">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div> -->
          
        </div>
            <!-- </div> -->
          </div>











          
        </div>
            <!-- </div> -->
          </div>

        

     


  </main><!-- End #main -->
@endsection