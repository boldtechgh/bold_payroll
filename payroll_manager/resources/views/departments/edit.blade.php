<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Department</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Department</li>
                        </ol>
                    </nav>
                </div>
            </div>
    
        </div>
    
    
        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="/departments/{{$department->id}}" >
                        @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Department Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Department Name" id="email-id-icon" name="department_name" value="{{$department->department_name}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('department_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Department Short Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Department" id="first-name-icon" name="department_short_name" value="{{$department->department_short_name}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('department_short_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
    
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- // Basic Vertical form layout section end -->
    </div>
        </x-layout>