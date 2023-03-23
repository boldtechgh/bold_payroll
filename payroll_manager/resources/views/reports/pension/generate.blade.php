<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>SSNIT</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/reports" class="text-success">Reports</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SSNIT: {{$pension->pension_tier}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="d-flex justify-content-end align-items-center">
                                    <a type="button" onclick="exportToExcel()" class="p-2" title="Export to Excel">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="48" height="48"
                                        viewBox="0 0 48 48">
                                        <path fill="#4CAF50" d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z"></path><path fill="#FFF" d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z"></path><path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z"></path><path fill="#FFF" d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z"></path>
                                        </svg>
                                    </a>
                                    <a type="button" onclick="PrintDiv('payroll')" class="p-2" title="Print">
                                        <img src="{{asset('assets/images/printer.png')}}" alt="">
                                    </a>
                            </div>
                        <div class="card-body" id="payroll">
                            
                            <div>
                                <h3 class="mb-4">{{$pension->pension_tier}}</h3>
                                {{-- <h4>Amount Due: GHc {{number_format($total_net_salary, 2)}}</h4> --}}
                            </div>
                            

                            <table class='table' id="myTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>SSN</th>
                                        <th>Basic Salary</th>
                                        <th>Contribution</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $index => $employee)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$employee->employee_id}}</td>
                                            <td>{{$employee->last_name}} {{$employee->middle_name}} {{$employee->first_name}}</td>    
                                            <td></td>                                            
                                            <td>GHc {{ number_format($employee->salary, 2) }}</td>
                                            <td>GHc {{ number_format(($pension->percentage/100)*$employee->salary, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                        <tr>
                                            <td colspan="4"><b>Totals</b> </td>
                                            <td><b>GHc {{ number_format($total_salary, 2) }}</b> </td>
                                            <td><b>GHc {{ number_format($total_contribution, 2) }}</b> </td>
                                        </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>