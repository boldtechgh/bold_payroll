<x-layout>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Department</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Department</li>
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
                            <th>Department Name</th>
                            <th>Department Short Name</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless(count($departments) == 0)
                        @foreach ($departments as $department)
                        <tr>
                            <td>{{$department->department_name}}</td>
                            <td>{{$department->department_short_name}}</td>
                            <td>{{$department->created_at}}</td>
                            <td><a href="/department/{{$department->id}}/edit"><i class="fa fa-pen text-success"></i></a>   
                                <form action="/departments/{{$department->id}}" method="POST">
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
                            <td colspan="4"><p class="text-center">No departments found</p></td>
                        </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </x-layout>