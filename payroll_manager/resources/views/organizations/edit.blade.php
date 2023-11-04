<x-layout>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Organization Info</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" class="text-success">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Organization Info</li>
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
                                <form class="form form-vertical" method="POST"
                                    action="/organizations/{{ $organization->id }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Organization Name</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Organization Name" id="email-id-icon"
                                                            name="organization_name"
                                                            value="{{ $organization->organization_name }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_name')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="email-id-icon">Organization Branch</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Organization Branch" id="email-id-icon"
                                                            name="organization_branch"
                                                            value="{{ $organization->organization_branch }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_branch')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Digital Address</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Digital Address" id="first-name-icon"
                                                            name="digital_address"
                                                            value="{{ $organization->digital_address }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('digital_address')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">City</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="City"
                                                            id="first-name-icon" name="organization_city"
                                                            value="{{ $organization->organization_city }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_city')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Region</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Region"
                                                            id="first-name-icon" name="organization_region"
                                                            value="{{ $organization->organization_region }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_region')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Organization Contact</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Organization Contact" id="first-name-icon"
                                                            name="organization_contact"
                                                            value="{{ $organization->organization_contact }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_contact')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Organization Email</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Organization Email" id="first-name-icon"
                                                            name="organization_email"
                                                            value="{{ $organization->organization_email }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_email')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Organization Website</label>
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Organization Website" id="first-name-icon"
                                                            name="organization_website"
                                                            value="{{ $organization->organization_website }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-table"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('organization_website')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="form-group has-icon-left">
                                                    <label for="first-name-icon">Company Logo</label>
                                                    <div class="position-relative">
                                                        <img src="{{ $organization->company_logo ? asset('storage/' . $organization->company_logo) : null }}"
                                                            alt="" class="rounded-circle"
                                                            style="width: 150px;" alt="Avatar">
                                                        <input type="file" name="company_logo"
                                                            value="{{ $organization->company_logo }}"
                                                            class="form-control" placeholder="" id="first-name-icon">
                                                        <div class="form-control-icon">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('company_logo')
                                                    <p class="text-danger text-mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Update</button>
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
