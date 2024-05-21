<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Company Management')</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ea580c;
        border-radius: 8px;
        position: relative;
    }

    .title {
        font-size: 24px;
        color: #ea580c;
        margin-bottom: 20px;
        
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="url"],
    .form-group input[type="file"] {
        width: calc(100% - 20px);
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group .logo-label {
        margin-right: 10px;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .form-row .form-group {
        width: calc(50% - 10px);
    }

    .save-btn {
        padding: 10px 20px;
        background-color: orange;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
    }
</style>
</head>
<body>
    @yield('content')
</body>
</html>
