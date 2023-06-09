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
                            <li class="breadcrumb-item"><a href="/reports" class="text-success">Reports</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payrolls</li>
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
                                    <td>{{ $payroll->ref_no }}</td>
                                    <td>{{ $payroll->start_date }}</td>
                                    <td>{{ $payroll->end_date }}</td>
                                    <td>
                                        @foreach ($payrollTypes as $payrollType)
                                            @if ($payroll->payroll_type == $payrollType->id)
                                                {{ $payrollType->type }}
                                            @endif
                                        @endforeach
                                    </td>
                                    @if ($payroll->status == 'new')
                                        <td><span class="badge bg-info">{{ $payroll->status }}</span></td>
                                    @else
                                        <td><span class="badge bg-success">{{ $payroll->status }}</span></td>
                                    @endif

                                    <td class='d-flex'>
                                        <a type="button" class="btn btn-info me-1 mb-1"
                                            href="/reports/payroll/{{ $payroll->id }}/show"><i
                                                class="fa fa-eye"></i></a>
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
