<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Management</title>
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

    .action-buttons {
        display: flex;
    }

    .action-buttons button {
        margin-right: 5px;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
    }

    .edit-btn {
        background-color: #4caf50;
        color: #fff;
    }

    .delete-btn {
        background-color: #f44336;
        color: #fff;
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
<div class="container">
    <div class="title">Companies</div>
    <button class="add-company-btn">Add New Company</button>
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
            <!-- Sample company data -->
            <tr>
                <td><img src="path_to_company_logo" alt="Company Logo" class="company-logo"></td>
                <td>Company A</td>
                <td>companyA@example.com</td>
                <td>www.companyA.com</td>
                <td class="action-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <tr>
                <td><img src="path_to_company_logo" alt="Company Logo" class="company-logo"></td>
                <td>Company B</td>
                <td>companyB@example.com</td>
                <td>www.companyB.com</td>
                <td class="action-buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <!-- Add more rows for other companies -->
        </tbody>
    </table>
</div>
</body>
</html>
