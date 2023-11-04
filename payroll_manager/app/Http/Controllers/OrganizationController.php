<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrganizationController extends Controller
{
    //
    // show Organization Info
    public function index()
    {
        return view('organizations.index', [
            'organizations' => Organization::latest()->get()
        ]);
    }

    // Show create Organization info form
    public function create()
    {
        return view('organizations.create');
    }

    // Store organization data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'organization_name' => ['required', Rule::unique('organizations', 'organization_name')],
            'organization_branch' => 'required',
            'digital_address' => 'required',
            'organization_city' => 'required',
            'organization_region' => 'required',
            'organization_contact' => 'required',
            'organization_email' => 'required',
            'organization_website' => 'required'
        ]);

        if ($request->hasFile('company_logo')) {
            $formFields['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        Organization::create($formFields);



        return redirect('/organizations')->with('message', 'Organization Info Added Sucess!');
    }


    // Show single Organization
    public function edit(Organization $organization)
    {
        return view('organizations.edit', ['organization' => $organization]);
    }
    // Update Organization data
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'organization_name' => 'required',
            'organization_branch' => 'required',
            'digital_address' => 'required',
            'organization_city' => 'required',
            'organization_region' => 'required',
            'organization_contact' => 'required',
            'organization_email' => 'required',
            'organization_website' => 'required'
        ]);

        if ($request->hasFile('company_logo')) {
            $formFields['company_logo'] = $request->file('company_logo')->store('logos', 'public');
        }

        $organization = Organization::find($id);

        // Getting values from the blade template form
        $organization->organization_name = $request->get('organization_name');
        $organization->organization_branch = $request->get('organization_branch');
        $organization->digital_address = $request->get('digital_address');
        $organization->organization_city = $request->get('organization_city');
        $organization->organization_region = $request->get('organization_region');
        $organization->organization_contact = $request->get('organization_contact');
        $organization->organization_email = $request->get('organization_email');
        $organization->organization_website = $request->get('organization_website');
        $organization->company_logo = $request->get('company_logo');
        $organization->update($formFields);


        return back()->with('message', 'Organization Info Updated Sucessfully!');
    }

    public function destroy($id)
    {
        $organization = Organization::find($id);
        $organization->delete();

        return redirect('/organizations')->with('success', 'Organization removed.');
    }
}