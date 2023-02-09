<x-layout>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Designation</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Designation</li>
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
                <form class="form form-vertical" method="POST" action="/designations">
                    @csrf
                <div class="form-body">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Designation Name</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Input Designation" id="designation_name" name="designation_name" value="{{old('designation_name')}}">
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                         @error('designation_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="email-id-icon">Department</label>
                            <div class="position-relative">
                                {{-- <input type="text" class="form-control" placeholder="Input Description" id="email-id-icon"> --}}
                                <select name="department_id" id="department_id" value="{{old('department_id')}}" class="form-control">
                                    <option value="">Select Department</option>
                                    @foreach ($departments as $department)
                                    <option value={{$department->id}}>{{$department->department_name}}</option>
                                    @endforeach
                                </select>
                                <div class="form-control-icon">
                                    <i class="fa fa-table"></i>
                                </div>
                            </div>
                        </div>
                         @error('department_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                    </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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