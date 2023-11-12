<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Payroll</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/payrolls" class="text-success">Payrolls</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payroll: {{$payroll->ref_no}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            {{-- <a type="button" class="btn btn-success mb-2" href="/payrolls/create">Generate Payroll</a> --}}
                            <div>
                                <h3 class="mb-4">Ref No: {{$payroll->ref_no}}</h3>
                                @foreach ($payroll_types as $payroll_type)
                                    @if ($payroll_type->id == $payroll->payroll_type)
                                        <h4 class="mb-4">Payroll Type: {{$payroll_type->type}}</h4>
                                    @endif
                                @endforeach
                                <h4 class="text-primary">Period: {{date_format(date_create($payroll->start_date), "d/M/Y")}} - {{date_format(date_create($payroll->end_date), "d/M/Y")}}</h4>
                            </div>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Total Allowance</th>
                                        <th>Total Deduction</th>
                                        <th>Net Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payroll_items as $payroll_item)
                                        <tr>
                                            @foreach ($employees as $employee)
                                                @if ($employee->id == $payroll_item->employee_id)
                                                    <td>{{$employee->employee_id}}</td>
                                                    <td>{{$employee->last_name}} {{$employee->middle_name}} {{$employee->first_name}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$payroll_item->salary}}</td>
                                            <td>{{$payroll_item->total_allowance}}</td>
                                            <td>{{$payroll_item->total_deduction}}</td>
                                            <td>{{$payroll_item->net_salary}}</td>
                                           
                                            
                                            <td class=''>
                                               
                                                
                                                <div class="d-flex me-3">
                                                    <a type="button" class="btn btn-info me-2 mb-1" href="/payroll_items/{{$payroll_item->id}}/show"><i class="fa fa-eye"></i></a>
                                                    <form action="{{ route('send.payroll', ['payrollId' => $payroll_item->payroll_id, 'employeeId' => $payroll_item->employee_id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success me-2 mb-1"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                    </form>
                                               {{-- <a type="button" class="btn btn-info me-1 mb-1" href="/payrolls/{{$payroll->id}}/edit"><i class="fa fa-pen"></i></a>    --}}
                                            <form action="/payroll_items/{{$payroll->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger me-2 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash"></i></button>
                                            </form>
                                                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>