<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('companies.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'nullable|email',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
        'website' => 'nullable|url',
    ]);

    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('logos', 'public'); // Ensures the file is saved in storage/app/public/logos
        $company->logo = $logoPath;
    }
    $company->website = $request->website;
    $company->save();

    return redirect()->route('companies.index')->with('success', 'Company created successfully');
}

    // Display the specified resource.
    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact('company'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
{
    $company = Company::findOrFail($id);
    
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'website' => 'nullable|url|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size if needed
    ]);

    // Update other fields
    $company->name = $validatedData['name'];
    $company->email = $validatedData['email'];
    $company->website = $validatedData['website'];

    // Handle logo update if a new logo is provided
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoPath = $logo->store('logos', 'public'); // Store logo in the 'public' disk under 'logos' directory
        $company->logo = $logoPath;
    }

    // Save the company
    $company->save();

    return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
}

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully');
    }
}
