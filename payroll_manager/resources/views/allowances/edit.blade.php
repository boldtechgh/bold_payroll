<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Allowances</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Allowances</li>
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
                    <form class="form form-vertical" method="POST" action="/allowances/{{$allowance->id}}" >
                        @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Allowance Name</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Allowance Name" id="email-id-icon" name="allowance_name" value="{{$allowance->allowance_name}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('allowance_name')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Allowance Amount</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Allowance Amount" id="email-id-icon" name="allowance_amount" value="{{$allowance->allowance_amount}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('allowance_amount')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Allowance Description</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Allowance Description" id="first-name-icon" name="allowance_description" value="{{$allowance->allowance_description}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('allowance_description')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>

                         <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">Start Date</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="Start Date" id="first-name-icon" name="start_date" value="{{$allowance->start_date}}">
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
                                <label for="first-name-icon">End Date</label>
                                <div class="position-relative">
                                    <input type="date" class="form-control" placeholder="End Date id="first-name-icon" name="end_date" value="{{$allowance->end_date}}">
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
                                <label for="first-name-icon">Mode of Calculation</label>
                                <div class="position-relative">
                                    <select name="mode" id="mode" value="{{old('mode')}}" class="form-control">
                                        @if ($allowance->mode == 'fixed')
                                            <option value="{{$allowance->mode}}">Fixed Value</option>
                                        @else
                                            <option value="{{$allowance->mode}}">Percentage</option>  
                                        @endif                                         
                                        <option value="fixed">Fixed Value</option>
                                        <option value="percentage">percentage</option>
                                    
                                </select>
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('mode')
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