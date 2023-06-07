<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Paye Tax Band</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/deductions/payetax" class="text-success">Manage Paye
                                    Tax Bands</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Paye tax Band</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>


        <!-- Basic Vertical form layout section start -->
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" method="POST" action="/deductions/payetax">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Chargeable Income</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Chargeable Income" id="email-id-icon"
                                                            name="chargeable_income"
                                                            value="{{ old('chargeable_income') }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('chargeable_income')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Rate</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Rate"
                                                            id="email-id-icon" name="rate"
                                                            value="{{ old('rate') }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-percent"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('rate')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Tax Payable</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Tax Payable" id="email-id-icon" name="payable"
                                                            value="{{ old('payable') }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('payable')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Cummulative Income</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Cummulative Income" id="first-name-icon"
                                                            name="cummulative_income"
                                                            value="{{ old('cummulative_income') }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('cummulative_income')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Cummulative Tax</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Cummulative Tax" id="first-name-icon"
                                                            name="cummulative_payable"
                                                            value="{{ old('cummulative_payable') }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-money-bill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('cummulative_payable')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Vertical form layout section end -->
    </div>
</x-layout>
