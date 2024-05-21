@extends('companies.layouts.create')

@section('title', 'Create Company')

@section('content')
<div class="container">
    <div class="title">Create Company</div>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="companyName">Name:</label>
                <input type="text" id="companyName" name="name" placeholder="Enter company name" value="{{ old('name') }}">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="companyEmail">Email Address:</label>
                <input type="email" id="companyEmail" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label class="logo-label" for="companyLogo">Logo:</label>
                <input type="file" id="companyLogo" name="logo">
                @error('logo')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="companyWebsite">Website:</label>
                <input type="url" id="companyWebsite" name="website" placeholder="Enter website URL" value="{{ old('website') }}">
                @error('website')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="save-btn">Save</button>
    </form>
</div>
@endsection
