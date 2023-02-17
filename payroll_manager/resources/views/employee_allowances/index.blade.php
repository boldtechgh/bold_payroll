<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Employee Allowances</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Employee Allowances</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Allowances</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{$employee->employee_id}}</td>
                                            <td>{{$employee->last_name}} {{$employee->middle_name}} {{$employee->first_name}}</td>
                                            <td>
                                                <a type="button" class="btn btn-primary btn-sm mb-2" href="/employee_allowances/{{$employee->id}}/edit">Add Allowance</a>
                                                @foreach ($employee_allowances as $employee_allowance)
                                                    @if ($employee->employee_id == $employee_allowance->employee_id) 
                                                        @foreach ($allowances as $allowance)
                                                            @if ($allowance->id == $employee_allowance->allowance_id)
                                                            <div class="d-flex justify-content-start mb-2 all-action">
                                                                <div>{{$allowance->allowance_name}}</div>
                                                                <form action="/employee_allowances/{{$employee_allowance->id}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    &nbsp;
                                                                    <button class="btn btn-danger" onclick="return confirm('{{ __('Are you sure you want to delete this Allowance?') }}')">Remove</button>
                                                                </form>
                                                            </div>
                                                                
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
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