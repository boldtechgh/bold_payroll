<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Payroll Manager</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/bootstrap')}}">
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
	 </head>
<body>
	<section class="vh-100" style="background-color: #6c828d;">
		<div class="container py-5 h-100">
		  <div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col col-xl-10">
			  <div class="card" style="border-radius: 1rem;">
				<div class="row g-0">
				  <div class="col-md-6 col-lg-5 d-none d-md-block">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
					  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
				  </div>
				  <div class="col-md-6 col-lg-7 d-flex align-items-center">
					<div class="card-body p-4 p-lg-5 text-black">
	  
					  <form id="loginForm" method="POST" onsubmit="return validateForm()" action="/users/authenticate">
	
						@csrf
						<div class="d-flex align-items-center mb-3 pb-1">
						  <i class="fas fa-cubes fa-2x me-3" style="color: #5e19ff;"></i>
						  <span class="h1 fw-bold mb-0">Payroll Manager</span>
						</div>
	  
						<h2 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 1px;">Login</h2>

						@error('email')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                         @enderror
	  
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Email address</label>
						  <input type="email"  id="username" name="email" value="{{old('email')}}" class="form-control form-control-lg" />
						  
						</div>
	  
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example27">Password</label>
						  <input type="password"  id="password" name="password" value="{{old('password')}}" class="form-control form-control-lg" />
						  @error('password')
                             <p class="text-danger text-mt-1">{{$message}}</p>
                       @enderror
						</div>
	  
						<div class="pt-1 mb-4">
						  <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
						</div>
					  </form>
	  
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
</body>
<script>
    function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "" || password == "") {
    alert("Username and password must be filled out");
    return false;
  }
  if (username.length < 3) {
    alert("Username must be at least 3 characters long");
    return false;
  }
  if (password.length < 3) {
    alert("Password must be at least 3 characters long");
    return false;
  }
  return true;
}

</script>
</html>