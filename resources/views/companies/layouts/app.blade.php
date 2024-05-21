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
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border: 10px solid #ea580c;
        border-bottom: none;
        border-radius: 0 0 8px 8px;
    }

    .title {
        font-size: 24px;
        color: #ea580c;
        margin-bottom: 10px;
    }

    .add-company-btn {
        background-color: #ea580c;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
        text-decoration: none;
        display: inline-block;
    }

    .company-table {
        width: 100%;
        border-collapse: collapse;
    }

    .company-table th, .company-table td {
        padding: 8px;
        text-align: left;
    }


    .company-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .company-table tr:hover {
        background-color: #e0e0e0;
    }

    .edit-btn, .delete-btn {
        background: none;
        border: none;
        cursor: pointer;
        
    }

    .edit-btn {
        
    }

    .delete-btn {
        color: #ea580c;
    }

    .action-buttons {
        display: flex;
        align-items: center;
    }

    .company-logo {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
</head>
<body>
    @yield('content')
</body>
</html>
