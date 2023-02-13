<x-layout>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class='table' id="table1">
                    <thead>
                        <tr>
                            <th>Emp ID</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Reg Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless(count($employees) == 0)
                        @foreach ($employees as $employee)
                        <tr>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->employee_id}}</td>
                            <td><span class="badge bg-success">{{$employee->status}}</span></td>
                            <td>{{$employee->created_at}}</td>
                            <td><a href="/employees/{{$employee->id}}/edit"><i class="fa fa-pen text-success"></i></a>   
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
</x-layout>