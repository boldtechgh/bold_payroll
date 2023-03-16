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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <style type="text/css">
        .notif:hover{
          background-color: rgba(0,0,0,0.1);
                  }
      </style>
      
        <script type="text/javascript">
          function PrintDiv(id) {
            var data=document.getElementById(id).innerHTML;
            var myWindow = window.open('', 'PRINT', 'height=1123,width=794');
            myWindow.document.write('<html><head><title>' + document.title  + '</title>');
            myWindow.document.write('<link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">');
            myWindow.document.write('<link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">');
            myWindow.document.write('<link rel="stylesheet" href="{{asset('assets/css/app.css')}}">');
            myWindow.document.write('<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">');
            myWindow.document.write('</head><body >');
            myWindow.document.write(data);
            myWindow.document.write('</body></html>');
            myWindow.document.close(); // necessary for IE >= 10

            myWindow.onload=function(){ // necessary if the div contain images

              myWindow.focus(); // necessary for IE >= 10
              myWindow.print();
              myWindow.close();
            };
          }
        </script>
        <script>
          function exportToExcel() {
            // Get the HTML table element
            const table = document.getElementById("myTable");
            
            // Create a new Workbook object
            const workbook = XLSX.utils.book_new();
            
            // Convert the table to a worksheet
            const worksheet = XLSX.utils.table_to_sheet(table);
            
            // Add the worksheet to the Workbook
            XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");
            
            // Save the Workbook as an Excel file
            const excelBuffer = XLSX.write(workbook, { bookType: "xlsx", type: "array" });
            const excelBlob = new Blob([excelBuffer], { type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" });
            saveAs(excelBlob, "myTable.xlsx");
          }
        </script>
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
      {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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