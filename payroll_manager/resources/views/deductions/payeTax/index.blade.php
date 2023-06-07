<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Manage Paye Tax Bands</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Paye Tax Bands</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <a type="button" class="btn btn-success mb-2" href="/deductions/payetax/create">Add PAYE Tax
                        Band</a>
                    <table class='table' id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Chargeable Income</th>
                                <th>Rate %</th>
                                <th>Tax Payable</th>
                                <th>Cummulative Income</th>
                                <th>Cummulative Tax</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless (count($payeTaxBands) == 0)
                                @foreach ($payeTaxBands as $key => $payeTaxBand)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $payeTaxBand->chargeable_income }}</td>
                                        <td>{{ $payeTaxBand->rate }}</td>
                                        <td>{{ $payeTaxBand->payable }}</td>
                                        <td>{{ $payeTaxBand->cummulative_income }}</td>
                                        <td>{{ $payeTaxBand->cummulative_payable }}</td>
                                        <td class="d-flex"><a type="button" class="btn btn-info me-1 mb-1"
                                                href="/deductions/payetax/{{ $payeTaxBand->id }}/edit"><i
                                                    class="fa fa-pen"></i></a>
                                            <form action="/deductions/payetax/{{ $payeTaxBand->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                &nbsp;
                                                <button type="submit" class="btn btn-danger me-1 mb-1"
                                                    onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                    </div>
                    </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <p class="text-center">No Deduction found</p>
                        </td>
                    </tr>
                @endunless
                </tbody>
                </table>
            </div>
    </div>

    </section>
    </div>
</x-layout>
