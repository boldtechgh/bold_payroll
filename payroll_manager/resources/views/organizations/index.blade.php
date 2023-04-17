<x-layout>
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Manage Organization Info</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" class="text-success">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Organization Info</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        
                        <div class="card-body">
                            <a type="button" class="btn btn-success mb-2" href="/organizations/create">Add Organistion Info</a>
                            <table class='table' id="table1">
                                <thead>
                                    <tr>
                                        <th>Organization Name</th>
                                        <th>Organization Branch</th>
                                        <th>Digital Address</th>
                                        <th>City</th>
                                        <th>Organization Region</th>
                                        <th>Organization Contact</th>
                                        <th>Organization Email</th>
                                        <th>Organization Website</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @unless(count($organizations) == 0)
                                     @foreach ($organizations as $organization)
                                    <tr>
                                        <td>{{$organization->organization_name}}</td>
                                        <td>{{$organization->organization_branch}}</td>
                                        <td>{{$organization->digital_address}}</td>
                                        <td>{{$organization->organization_city}}</td>
                                        <td>{{$organization->organization_region}}</td>
                                        <td>{{$organization->organization_contact}}</td>
                                        <td>{{$organization->organization_email}}</td>
                                        <td>{{$organization->organization_website}}</td>
                                        <td>{{$organization->created_at}}</td>
                                        <td class="d-flex"><a type="button" class="btn btn-info me-1 mb-1" href="/organizations/{{$organization->id}}/edit"><i class="fa fa-pen"></i></a>   
                                            <form action="/organizations/{{$organization->id}}" method="POST">
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
                                        <td colspan="4"><p class="text-center">No Info found</p></td>
                                    </tr>
                                    @endunless
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
</x-layout>