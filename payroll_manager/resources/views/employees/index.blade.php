<x-layout>
    <div class="main-content container-fluid">
     <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Employees</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Employees</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <a type="button" class="btn btn-success mb-2" href="/employees/create">Add Employee</a>
                <table class='table' id="table1">
                    <thead>
                        <tr>
                            <th>Emp ID</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Reg Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless(count($employees) == 0)
                        @foreach ($employees as $employee)
                        <tr>
                            
                            <td>{{$employee->employee_id}}</td>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->department_id}}</td>
                            <td><span class="badge bg-success">{{$employee->designation_id}}</span></td>
                            <td>{{$employee->created_at}}</td>
                            <td class="d-flex"><a type="button" class="btn btn-info me-1 mb-1" href="/employees/{{$employee->id}}/edit"><i class="fa fa-pen"></i></a>   
                                <form action="/employees/{{$employee->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')   
                                    <button type="submit" class="btn btn-danger me-1 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash"></i></button>
                                    {{-- <a href="/departments/{{$department->id}}" data-method="delete"><i class="fa fa-trash text-danger"></i></a> --}}
                            </form>
                            </td> 
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4"><p class="text-center">No Employees found</p></td>
                        </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    </div>
</x-layout>