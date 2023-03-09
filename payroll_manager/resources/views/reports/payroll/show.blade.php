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
                                    <li class="breadcrumb-item"><a href="/reports" class="text-success">Reports</a></li>
                                    <li class="breadcrumb-item"><a href="/reports/payroll" class="text-success">Payrolls</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payroll: {{$payroll->ref_no}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h3 class="mb-4">Ref No: {{$payroll->ref_no}}</h3>
                                <h4 class="text-primary mb-4">Period: {{date_format(date_create($payroll->start_date), "d/M/Y")}} - {{date_format(date_create($payroll->end_date), "d/M/Y")}}</h4>
                                <h4>Amount Due: GHc {{number_format($total_net_salary, 2)}}</h4>
                            </div>
                            <button class="btn btn-success" onclick="exportToExcel()">Export to Excel</button>

                            <table class='table' id="myTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Basic Salary</th>
                                        <th>Total Allowance</th>
                                        <th>Total Deduction</th>
                                        <th>Net Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payroll_items as $index => $payroll_item)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            @foreach ($employees as $employee)
                                                @if ($employee->id == $payroll_item->employee_id)
                                                    <td>{{$employee->employee_id}}</td>
                                                    <td>{{$employee->last_name}} {{$employee->middle_name}} {{$employee->first_name}}</td>
                                                @endif
                                            @endforeach
                                            <td>GHc {{ number_format($payroll_item->salary, 2) }}</td>
                                            <td>GHc {{ number_format($payroll_item->total_allowance, 2) }}</td>
                                            <td>GHc {{ number_format($payroll_item->total_deduction, 2) }}</td>
                                            <td>GHc {{ number_format($payroll_item->net_salary, 2) }}</td>
                                        </tr>
                                       
                                    @endforeach
                                        
                                </tbody>
                                <tfoot>
                                        <tr>
                                            <td colspan="3"><b>Totals</b> </td>
                                            <td><b>GHc {{number_format($total_salary, 2)}}</b></td>
                                            <td><b>GHc {{number_format($total_allowances, 2)}}</b></td>
                                            <td><b>GHc {{number_format($total_deductions, 2)}}</b></td>
                                            <td><b>GHc {{number_format($total_net_salary, 2)}}</b></td>
                                        </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>