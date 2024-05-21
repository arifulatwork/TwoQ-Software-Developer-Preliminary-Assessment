@extends('companies.layouts.create')

@section('title', 'Create Company')
<!-- resources/views/companies/create.blade.php -->

@section('content')
<div class="container">
    <div class="title">Create Company</div>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <button class="save-btn" type="submit">Save</button>
        <div class="form-row">
            <div class="form-group">
                <label for="companyName">Name:</label>
                <input type="text" id="companyName" name="name" placeholder="Enter company name" required>
            </div>
            <div class="form-group">
                <label for="companyEmail">Email Address:</label>
                <input type="email" id="companyEmail" name="email" placeholder="Enter email address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label class="logo-label" for="companyLogo">Logo:</label>
                <input type="file" id="companyLogo" name="logo" onchange="previewLogo()">
                <img id="logoPreview" src="#" alt="Logo Preview" style="display: none; width: 100px; height: 100px; margin-top: 10px;">
            </div>
            <div class="form-group">
                <label for="companyWebsite">Website:</label>
                <input type="url" id="companyWebsite" name="website" placeholder="Enter website URL">
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
            preview.src = "";
            preview.style.display = 'none';
        }
    }
</script>
@endsection
