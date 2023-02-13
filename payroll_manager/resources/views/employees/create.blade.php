<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Employee</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                        </ol>
                    </nav>
                </div>
            </div>
    
        </div>
    
    
        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="/employees" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">ID Number</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="employee_id" placeholder="id number" id="first-name-icon" name="employee_id">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-hash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('employee_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">First Name</label>
                                                <div class="position-relative">
                                                    <input type="text" name="first_name" class="form-control" placeholder="first name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('first_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Middle Name</label>
                                                <div class="position-relative">
                                                    <input type="text" name="middle_name" class="form-control" placeholder="middle name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('middle_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Last Name</label>
                                                <div class="position-relative">
                                                    <input type="text" name="last_name" class="form-control" placeholder="last name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('last_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Gender</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="gender" id="basicSelect">
                                                            <option value="Male">Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            @error('gender')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Birth Date</label>
                                                <div class="position-relative">
                                                    <input type="date" name="date_of_birth" class="form-control" placeholder="birth" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('date_of_birth')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Email</label>
                                                <div class="position-relative">
                                                    <input type="text" name="email" class="form-control" placeholder="email" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('email')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Contact</label>
                                                <div class="position-relative">
                                                    <input type="text" name="contact" class="form-control" placeholder="contact" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('contact')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Profile</label>
                                                <div class="position-relative">
                                                    <input type="file" name="employee_profile" class="form-control" placeholder="" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Department</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="department_id" id="basicSelect">
                                                            <option value="1">IT</option>
                                                            <option>ENGINEERING</option>
                                                            <option>HR</option>
                                                            <option>FINANCE</option>
                                                        </select>
                                                    </fieldset>
                                            </div>
                                            @error('department_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Designation</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" name="designation_id" id="basicSelect">
                                                            <option value="1">IT</option>
                                                            <option value="2">MANAGER</option>
                                                            <option value="3">SUPERVISOR</option>
                                                            <option value="4">ENGINEER</option>
                                                        </select>
                                                    </fieldset>
                                            </div>
                                            @error('designtion_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Username</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="username" placeholder="username" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('username')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Password</label>
                                                <div class="position-relative">
                                                    <input type="password" name="password" class="form-control" placeholder="passsword" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('password')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
</x-layout>