<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Payroll</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/payrolls" class="text-success">Payrolls</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Payroll</li>
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
                    <form class="form form-vertical" method="POST" action="/payrolls/{{$payroll->id}}" >
                        @csrf
                        @method('PUT')
                    <div class="form-body">
                        <div class="row">
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Reference Number</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Payroll Reference Number" id="email-id-icon" name="ref_no" value="{{$payroll->ref_no}}">
                                    
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('ref_no')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Start Date</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Start Date" id="email-id-icon" name="start_date" value="{{$payroll->start_date}}">
                                   
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('start_date')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">End Date</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="End Date" id="email-id-icon" name="end_date" value="{{$payroll->end_date}}">
                                   
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('end_date')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Payroll Type</label>
                                <div class="position-relative">

                                   <select name="payroll_type" id="payroll_type" value="{{old('payroll_type')}}" class="form-control">
                                    @foreach ($payrollTypes as $payrollType)
                                        @if ($payroll->payroll_type == $payrollType->id)
                                            <option value="{{$payrollType->id}}">{{$payrollType->type}}</option>
                                        @endif
                                    @endforeach

                                    @foreach ($payrollTypes as $payrollType)
                                    <option value={{$payrollType->id}}>{{$payrollType->type}}</option>
                                    @endforeach
                                </select>
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('payroll_type')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <input type="hidden" name="status" value="new">
                           
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