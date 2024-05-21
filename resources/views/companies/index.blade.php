@extends('companies.layouts.app')

@section('content')
<div class="container">
    <div class="title">Companies</div>
    <a href="{{ route('companies.create') }}" class="add-company-btn">Add New Company</a>
    <table class="company-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>
                        <div style="display: flex; align-items: center;">
                            @if($company->logo)
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" class="company-logo" style="margin-right: 10px;">
                            @else
                                <div style="width: 50px; height: 50px; background-color: #ccc; border-radius: 50%; margin-right: 10px;"></div>
                            @endif
                            <span>{{ $company->name }}</span>
                        </div>
                    </td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website }}</td>
                    <td class="action-buttons">
                        <button onclick="window.location='{{ route('companies.edit', $company->id) }}'" class="edit-btn">Edit</button>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
