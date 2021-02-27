<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>DARUMA Japanese Language School</title>
  <!-- General CSS Files -->

  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
  <link href="{{ asset('backend/assets/img/logo.jpg') }}" rel="icon">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">


  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  <!-- Template CSS -->
  <link href="{{asset('plugin/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">



  <link rel="stylesheet" type="text/css" href="{{ asset('plugin/select2/css/select2.min.css') }}">


</head>

<body>


 @include('backend.nav')


     <div class="main-sidebar sidebar-style-2">
        @include('backend.sidebar')
      </div>




      <!-- Main Content -->
      <div class="main-content">

    
   @yield('content') 

          @include('backend.settingbar')
     


      </div>

       @include('backend.backend_footer')
    </div>
  </div>


  {{-- admin passwordchange --}}

<div class="modal fade" id="adminchangepasswordmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title rcode" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{route('admin_change_password')}}" method="post">
          @csrf
          <div class="row form-group">
            <div class="row">
              <div class="col-md-12">
                <h6 class="text-warning">Password must be at least 8 numbers</h6>
              </div>
              
            </div>
            <div class="col-md-12 ">
              <label for="password">Passowrd</label>
              <div class="col-sm-12 input-group">
                    <input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon1" placeholder="Enter New Password">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-light circle" onclick="showpassword()"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 ">
              <label for="password_confirmation">Confirm Passowrd</label>
              <div class="col-sm-12 input-group">
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="basic-addon1"  placeholder="Retype Password">
                  <div class="input-group-prepend">
                      <button type="button" class="btn btn-light circle" onclick="showconfirmpassword()"><i class="fas fa-eye"></i></button>
                  </div>
              </div>
              
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>

        </form>
      </div>

      
    </div>
  </div>
</div>

  <!-- General JS Scripts -->
  <script src="  {{ asset('backend/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="  {{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="  {{ asset('backend/assets/js/page/index.js') }}"></script>
  <!-- Template JS File -->
  <script src="  {{ asset('backend/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="  {{ asset('backend/assets/js/custom.js') }}"></script>
  <!-- JS Libraies -->
  <script src="  {{ asset('backend/assets/bundles/datatables/datatables.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="  {{ asset('backend/assets/js/page/datatables.js') }}"></script>



  <script src="  {{ asset('backend/assets/bundles/cleave-js/dist/cleave.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="  {{ asset('backend/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="  {{ asset('backend/assets/js/page/forms-advanced-forms.js') }}"></script>


  {{-- datatable --}}
  <script src="{{asset('plugin/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('plugin/datatables/dataTables.bootstrap4.min.js')}}"></script>


  <script type="text/javascript" src="{{ asset('plugin/select2/js/select2.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.btn_change_password').click(function(){
        $('#adminchangepasswordmodal').modal('show');
      })
    })

    function showpassword()
      {
         var password = document.getElementById('password');
          if(password.type=="password"){
             password.type="text";
          }
          else{
              password.type="password";
          }

      }

      $(document).ready(function(){
          $('.msg').hide(10000);
      })

      function showconfirmpassword()
      {
         var password = document.getElementById('password_confirmation');
          if(password.type=="password"){
             password.type="text";
          }
          else{
              password.type="password";
          }

      }

      $(document).ready(function(){
          $('.msg').hide(10000);
      })
  </script>

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('plugin/demo/datatables-demo.js')}}"></script> --}}

  @yield('script')
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 200
    });
</script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>