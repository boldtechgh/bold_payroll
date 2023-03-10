<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manage Allowance</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Allowance</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        
                        <div class="card-body">
                            <a type="button" class="btn btn-success mb-2" href="/allowances/create">Add Allowance</a>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Allowance Name</th>
                                        <th>Allowance Amount</th>
                                        <th>description</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @unless(count($allowances) == 0)
                                     @foreach ($allowances as $allowance)
                                    <tr>
                                        <td>{{$allowance->allowance_name}}</td>
                                        <td>{{$allowance->allowance_amount}}</td>
                                        <td>{{$allowance->allowance_description}}</td>
                                        <td>{{$allowance->created_at}}</td>
                                        <td class="d-flex"><a type="button" class="btn btn-info me-1 mb-1" href="/allowances/{{$allowance->id}}/edit"><i class="fa fa-pen"></i></a>   
                                            <form action="/allowances/{{$allowance->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                              
                                            &nbsp;
                                            <button type="submit" class="btn btn-danger me-1 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4"><p class="text-center">No Allowance found</p></td>
                                    </tr>
                                    @endunless
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>