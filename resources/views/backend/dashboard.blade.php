    @extends('backend_template')
@section('content')

     <section class="section">
          <div class="row ">

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Staff</h5>
                          <br>
                          <h2 class="mb-3 font-18">
                          @if(count($staffs) > 0)
                          {{count($staffs)}}
                          @else
                          {{0}}
                          @endif
                          </h2>
                         <!--  <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/1.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Students</h5>
                          <br>
                          <h2 class="mb-3 font-18">
                          @if(count($students) > 0)
                          {{count($students)}}
                          @else
                          {{0}}
                          @endif
                          </h2>
                         <!--  <p class="mb-0"><span class="col-green">10%</span> Increase</p> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/1.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Income</h5>
                          <br>
                          @php
                              $kyat = 0;
                              $yen = 0;
                            @endphp
                            @foreach($payments as $payment)
                              @if($payment->status == 1)
                                @php
                                  $yen += $payment->amount + $payment->discount;
                                @endphp
                              @else
                                @php
                                  $kyat = $payment->amount + $payment->discount;
                                @endphp
                              @endif
                            @endforeach


                          <p class="mb-0">
                            {{number_format($kyat)}} MMK
                          </p>
                          <p class="mb-0">
                            {{number_format($yen)}} Yen
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/4.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Classes</h5>
                          <br>
                          <h2 class="mb-3 font-18">
                            @if(count($timetables) > 0)
                            {{count($timetables)}}
                            @else
                            {{0}}
                            @endif
                          </h2>
                          <!-- <p class="mb-0"><span class="col-green">18%</span>
                            Increase</p> -->
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           {{--  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"></h5>
                          <h2 class="mb-3 font-18">0</h2>
                          <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/2.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              --}}
         
      
          </div>



    <div class="row">
       <div class="col- col-sm-6 col-lg-6">
          <div class="card ">
     
            <div class="tile">
              <h4 class="text-dark ml-3 mt-3">{{ __("Student Chart")}}</h4>
                <div class="embed-responsive embed-responsive-16by9">
                  <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                </div>
            </div>
          </div>
      </div>
    </div>

   

        

    {{--  <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Student chart</h4>
                  <!-- <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div> -->
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1"></div>
                      <div class="row mb-0">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="m-b-0">$675</h5>
                              <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"
                                class="col-orange"></i>
                              <h5 class="m-b-0">$1,587</h5>
                              <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"
                                class="col-green"></i>
                              <h5 class="mb-0 m-b-0">$45,965</h5>
                              <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="row mt-5">
                        <div class="col-7 col-xl-7 mb-3">Total customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">8,257</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total Income</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$9,857</span>
                          <sup class="text-danger">-18%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Project completed</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">28</span>
                          <sup class="col-green">+16%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">Total expense</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">$6,287</span>
                          <sup class="col-green">+09%</sup>
                        </div>
                        <div class="col-7 col-xl-7 mb-3">New Customers</div>
                        <div class="col-5 col-xl-5 mb-3">
                          <span class="text-big">684</span>
                          <sup class="col-green">+22%</sup>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         --}}
          
        </section>
@endsection


@section('script')
{{-- chart --}}
<script type="text/javascript" src="{{ asset('plugin/chart/chart.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $.get("{{route('getstudents')}}",function (response) {
      console.log(response);
      var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [
         // {
          //   label: "My First dataset",
          //   fillColor: "rgba(220,220,220,0.2)",
          //   strokeColor: "rgba(220,220,220,1)",
          //   pointColor: "rgba(220,220,220,1)",
          //   pointStrokeColor: "#fff",
          //   pointHighlightFill: "#fff",
          //   pointHighlightStroke: "rgba(220,220,220,1)",
          //   data: [65, 59, 80, 81, 56]
          // },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: response.students
          }
        ]
      };

      var pdata = [
        {
          value: response.success_ways,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Success Ways"
        },
        {
          value: response.reject_ways,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Reject Ways"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
     
    })

  })



  var html = ''
  html += `<option`;
                 if(category == 'journal'){ seleceted }
  html += `value="journal">Journal</option>
           <option`; if(category == 'video'){ html+= `seleceted` }
  html += ` value="video">video</option>`
    

  html+= `<option>Journal</option>
  <option>Video</option>`
    
</script>
@endsection












