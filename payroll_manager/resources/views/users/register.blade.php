<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add User</li>
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
                                <form class="form" action="/users" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Full Name</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="full name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('name')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Contact</label>
                                                <div class="position-relative">
                                                    <input type="number" name="contact" value="{{old('contact')}}" class="form-control" placeholder="contact" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('contact')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Email</label>
                                                <div class="position-relative">
                                                    <input type="text" value="{{old('email')}}" class="form-control" placeholder="email" name="email" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('email')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Username</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="username" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('username')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Password</label>
                                                <div class="position-relative">
                                                    <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="password"  id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('password')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Confirm Password</label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="password" name="password_confirmation" value="{{old('password_confirmation')}}" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="fa fa-key"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            @error('password_confirmation')
                                            <p class="text-danger text-mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">User Category</label>
                                                <div class="position-relative">
                                                    <fieldset class="form-group">
                                                        <select name="user_type" value="{{old('user_type')}}" class="form-select" id="basicSelect">
                                                            <option value="Admin">Admin</option>
                                                            <option value="Staff">Staff</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            @error('user_type')
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