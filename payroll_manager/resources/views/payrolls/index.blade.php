<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Payrolls</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Payrolls</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <a type="button" class="btn btn-success mb-2" href="/payrolls/create">Generate Payroll</a>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Ref No</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payrolls as $payroll)
                                        <tr>
                                            <td>{{$payroll->ref_no}}</td>
                                            <td>{{$payroll->start_date}}</td>
                                            <td>{{$payroll->end_date}}</td>
                                            <td>
                                                @foreach($payrollTypes as $payrollType)
                                                    @if ($payroll->payroll_type == $payrollType->id)
                                                        {{$payrollType->type}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            @if ($payroll->status == 'new')
                                                    <td><span class="badge bg-info">{{$payroll->status}}</span></td>
                                                @else
                                                    <td><span class="badge bg-success">{{$payroll->status}}</span></td>
                                                @endif
                                            
                                            <td class='d-flex'>
                                                @if ($payroll->status == 'new')
                                                    <a type="button" class="btn btn-success me-1 mb-1" href="/payroll_items/{{$payroll->ref_no}}">Calculate</a>
                                                @else
                                                    <a type="button" class="btn btn-info me-1 mb-1" href="/payroll_items/{{$payroll->id}}/show"><i class="fa fa-eye"></i></a>
                                                @endif
                                               <a type="button" class="btn btn-info me-1 mb-1" href="/payrolls/{{$payroll->id}}/edit"><i class="fa fa-pen"></i></a>   
                                            <form action="/payrolls/{{$payroll->id}}" method="POST">
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