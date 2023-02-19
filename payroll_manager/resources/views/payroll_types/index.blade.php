<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Payroll Types</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payroll Types</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-success mb-2" href="/payroll_types/create">Add Payroll Type</a>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Payroll Type</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payrollTypes as $payrollType)
                                        <tr>
                                            <td>{{$payrollType->type}}</td>
                                            <td>{{$payrollType->description}}</td>
                                            <td class='d-flex'>
                                               <a type="button" class="btn btn-info me-1 mb-1" href="/payroll_types/{{$payrollType->id}}/edit"><i class="fa fa-pen"></i></a>   
                                            <form action="/payroll_types/{{$payrollType->id}}" method="POST">
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