<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Assign Deductions</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/employee_deductions" class="text-success">Employee Deductions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Assign Deductions</li>
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
                    <form class="form form-vertical" method="POST" action="/employee_deductions" >
                        @csrf
                    <div class="form-body">
                        <div class="row">

                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Employee</label>
                                <div class="position-relative">
                                    
                                    <select name="employee_id" id="employee_id" value="{{old('employee_id')}}" class="form-control">
                                        
                                        <option value={{$employee->employee_id}}>{{$employee->last_name}} {{$employee->middle_name}} {{$employee->first_name}}</option>
                                    
                                </select>
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('employee_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Deduction</label>
                                <div class="position-relative">
                                    
                                    <select name="deduction_id" id="deduction_id" value="{{old('deduction_id')}}" class="form-control">
                                        <option value="">Select Deduction</option>
                                        @foreach ($deductions as $deduction)
                                            <option value={{$deduction->id}}>{{$deduction->deduction_name}}</option>
                                        @endforeach
                                </select>
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('deduction_id')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        
                           
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Assign</button>
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