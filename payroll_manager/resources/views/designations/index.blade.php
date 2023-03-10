<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manage Designation</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Designation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-success mb-2" href="/designations/create">Add Designation</a>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Designation Name</th>
                                        <th>Department</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designations as $designation)
                                    <tr>
                                        <td>{{$designation->designation_name}}</td>
                                        @foreach ($departments as $department)
                                            @if ($designation->department_id == $department->id)
                                                <td>{{$department->department_name}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{$designation->created_at}}</td>
                                        <td class="d-flex">
                                                <a type="button" class="btn btn-info me-1 mb-1" href="/designations/{{$designation->id}}/edit"><i class="fa fa-pen"></i></a>   
                                            <form action="/designations/{{$designation->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                &nbsp;
                                                <button type="submit" class="btn btn-danger me-1 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash"></i></button>
                                            </form>
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