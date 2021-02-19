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

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('plugin/demo/datatables-demo.js')}}"></script> --}}

  @yield('script')

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>