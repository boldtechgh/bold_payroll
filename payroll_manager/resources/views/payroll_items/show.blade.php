<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Payslip</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/payrolls/" class="text-success">Payroll</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payroll: {{$payroll_item->ref_no}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            {{-- <a type="button" class="btn btn-success mb-2" href="/payrolls/create">Generate Payroll</a> --}}
                            {{-- <div>
                                <h3 class="mb-4">Ref No: {{$payroll_item->ref_no}}</h3>
                                @foreach ($payroll_types as $payroll_type)
                                    @if ($payroll_type->id == $payroll_item->payroll_type)
                                        <h4 class="mb-4">Payroll Type: {{$payroll_type->type}}</h4>
                                    @endif
                                @endforeach
                                <h4 class="text-primary">Period: {{date_format(date_create($payroll_item->start_date), "d/M/Y")}} - {{date_format(date_create($payroll_item->end_date), "d/M/Y")}}</h4>
                            </div> --}}
                            <div id="print">
                            <div class="payslip">
                                <h1>Payslip</h1>
                             <table>
                                    <tr>
                                        <th>Employee ID</th>
                                        <td>{{ $payroll_item->employee_id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Employee Name</th>
                                        <td>{{ $payroll_item->last_name }} {{ $payroll_item->middle_name }} {{ $payroll_item->first_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Department</th>
                                        <td>{{ $payroll_item->department_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Designation</th>
                                        <td>{{ $payroll_item->designation_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Payroll Date</th>
                                        <td>{{ date_format(date_create($payroll_item->created_at), "d/M/Y") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pay Period Start</th>
                                        <td>{{ date_format(date_create($payroll_item->start_date), "d/M/Y") }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pay Period End</th>
                                        <td>{{ date_format(date_create($payroll_item->end_date), "d/M/Y") }}</td>
                                    </tr>
                                    <tr>
                                        <th class="extras">Basic Salary</th>
                                        <td class="amount">GHc {{ number_format($payroll_item->salary, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <th class="extras titles">Allowances</th>
                                    </tr>
                                    @foreach ($allowances as $allowance)
                                        <tr>
                                            <th class="extras">{{ $allowance->allowance_name }}</th>
                                            <td class="amount">GHc {{ number_format($allowance->allowance_amount, 2) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th class="extras titles">Deductions</th>
                                    </tr>
                                    @foreach ($deductions as $deduction)
                                        <tr>
                                            <th class="extras">{{ $deduction->deduction_name }}</th>
                                            <td class="amount">GHc {{ number_format($deduction->deduction_amount, 2) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th class="extras titles">Net Salary</th>
                                        <td class="amount final">GHc {{ number_format($payroll_item->net_salary, 2) }}</td>
                                    </tr>
                                </table>
                                
                            </div>
                            </div>
                            <button class="btn btn-success" style="" onclick="PrintDiv('print')">Print</button>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>