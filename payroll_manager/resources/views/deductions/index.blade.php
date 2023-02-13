<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manage Deductions</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Deductions</li>
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
                                        <th>Deduction Name</th>
                                        <th>Deduction Amount</th>
                                        <th>description</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @unless(count($deductions) == 0)
                                     @foreach ($deductions as $deduction)
                                    <tr>
                                        <td>{{$deduction->deduction_name}}</td>
                                        <td>{{$deduction->deduction_amount}}</td>
                                        <td>{{$deduction->deduction_description}}</td>
                                        <td>{{$deduction->created_at}}</td>
                                        <td><a href="/deductions/{{$deduction->id}}/edit"><i class="fa fa-pen text-success"></i></a>   
                                            <form action="/deductions/{{$deduction->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <a type="submit" href="/deductions/{{$deduction->id}}" data-method="delete"><i class="fa fa-trash text-danger"></i></a> --}}
                                            {{-- <button type="submit" class="btn btn-primary me-1 mb-1">Delete</button> --}}
                                            &nbsp;
                                            <button type="submit" class=" me-1 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4"><p class="text-center">No Deduction found</p></td>
                                    </tr>
                                    @endunless
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>