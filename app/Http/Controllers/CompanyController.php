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
            $logoPath = $request->file('logo')->store('logos');
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
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url',
        ]);

        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos');
            $company->logo = $logoPath;
        }
        $company->website = $request->website;
        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully');
    }
}
