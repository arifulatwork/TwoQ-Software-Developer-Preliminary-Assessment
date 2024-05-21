<!-- resources/views/companies/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title">Companies</div>
    <a href="{{ route('companies.create') }}" class="add-company-btn">Add New Company</a>
    <table class="company-table">
        <thead>
            <tr>
                <th>Logo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Company data will be dynamically inserted here -->
        </tbody>
    </table>
</div>
@endsection

