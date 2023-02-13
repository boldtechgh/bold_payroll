<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Payroll Manager</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
      <script defer src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>

      <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">

      <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <style type="text/css">
        .notif:hover{
          background-color: rgba(0,0,0,0.1);
                  }
      </style>
   </head>
   <body>
    
      <div id="app">
        @include('components.sidebar')
        <div id="main">
          @include('components.navbar')
          <x-flash-message />
          {{$slot}}
        </div>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
      <script src="{{asset('assets/js/vendors.js')}}"></script>

      <script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
      <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
      <script src="{{asset('assets/js/app.js')}}"></script>
      <script src="{{asset('assets/js/customjs.js')}}"></script>
      <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
      <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>