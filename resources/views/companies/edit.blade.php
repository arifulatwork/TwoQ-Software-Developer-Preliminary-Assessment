@extends('companies.layouts.create')

@section('title', 'Edit Company')

@section('content')
<div class="container">
    <div class="title">Edit Company</div>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <button class="save-btn" type="submit">Save</button>
        <div class="form-row">
            <div class="form-group">
                <label for="companyName">Name:</label>
                <input type="text" id="companyName" name="name" placeholder="Enter company name" value="{{ $company->name }}" required>
            </div>
            <div class="form-group">
                <label for="companyEmail">Email Address:</label>
                <input type="email" id="companyEmail" name="email" placeholder="Enter email address" value="{{ $company->email }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label class="logo-label" for="companyLogo">Logo:</label>
                <input type="file" id="companyLogo" name="logo" onchange="previewLogo()">
                <img id="logoPreview" src="{{ asset('storage/' . $company->logo) }}" alt="Logo Preview" style="display: block; width: 100px; height: 100px; margin-top: 10px;">
            </div>
            <div class="form-group">
                <label for="companyWebsite">Website:</label>
                <input type="url" id="companyWebsite" name="website" placeholder="Enter website URL" value="{{ $company->website }}">
            </div>
        </div>
    </form>
</div>

<script>
    function previewLogo() {
        const file = document.getElementById('companyLogo').files[0];
        const preview = document.getElementById('logoPreview');
        const reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "{{ asset('storage/' . $company->logo) }}";
            preview.style.display = 'block';
        }
    }
</script>
@endsection
