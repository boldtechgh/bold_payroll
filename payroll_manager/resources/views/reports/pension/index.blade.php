<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Pension Tiers</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/reports" class="text-success">Reports</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">SSNIT Settings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addTier">Add Tier</button>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Tier</th>
                                        <th>Percentage</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pensions as $key=>$pension)
                                        <tr>
                                                <td>
                                                    <div class="col-6">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Tier" id="email-id-icon" name="pension_tier" value="{{$pension->pension_tier}}">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-table"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('pension_tier')
                                                        <p class="text-danger text-mt-1">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-4">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Percentage" id="email-id-icon" name="percentage" value="{{$pension->percentage}}">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-percent"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('percentage')
                                                        <p class="text-danger text-mt-1">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </td>
                                                                                       
                                                <td class='d-flex'>
                                                <button type="button" class="btn btn-info mb-2" data-toggle="modal" data-target="#updateTier{{$key}}"><i class="fa fa-edit"></i></button>
                                            
                                                <form action="/ssnit/settings/{{$pension->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    &nbsp;
                                                    <button type="submit" class="btn btn-danger me-1 mb-1" onclick="return confirm('{{ __('Are you sure you want to delete?') }}')"><i class="fa fa-trash"></i></button>
                                                </form>
                                                </td>
                                        

                                         <!-- Update Modal -->
                                        <div class="modal fade" id="updateTier{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Update Pension Tiers</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-vertical" method="POST" action="/ssnit/settings/{{$pension->id}}" >
                                                    @csrf
                                                    @method('PUT')
                                                <div class="form-body">
                                                    <div class="row">
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Tier</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Tier" id="email-id-icon" name="pension_tier" value="{{$pension->pension_tier}}">                                    
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-table"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('pension_tier')
                                                        <p class="text-danger text-mt-1">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Percentage</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" placeholder="Percentage" id="email-id-icon" name="percentage" value="{{$pension->percentage}}">                                    
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-table"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('percentage')
                                                        <p class="text-danger text-mt-1">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                
                                                    <div class="modal-footer col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        
                                            </div>
                                        </div>
                                        </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="addTier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pension Tiers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" method="POST" action="/ssnit/settings" >
                        @csrf
                    <div class="form-body">
                        <div class="row">
                        
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Tier</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Tier" id="email-id-icon" name="pension_tier" value="{{old('pension_tier')}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('pension_tier')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
                         
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="email-id-icon">Percentage</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Percentage" id="email-id-icon" name="percentage" value="{{old('percentage')}}">
                                    <div class="form-control-icon">
                                        <i class="fa fa-table"></i>
                                    </div>
                                </div>
                            </div>
                            @error('percentage')
                            <p class="text-danger text-mt-1">{{$message}}</p>
                            @enderror
                        </div>
    
                        <div class="modal-footer col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
               
                </div>
            </div>
            </div>

           
</x-layout>