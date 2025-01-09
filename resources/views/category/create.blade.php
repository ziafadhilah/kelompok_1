<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Centered</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        form label {
            font-size: 14px;
            color: #333;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        form button:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>

<form action="/category" method="post" enctype="multipart/form-data">
    
@csrf
    <label>Input kode Barang :</label> 
    <br>
    <input type="text" name="category_code">
    <br> 
    <label>Input Nama Barang:</label> 
    <br> 
    <input type="text" name="name">
    <br>
    <label>Masukan Foto Barang :</label>
    <br> 
    <input type="file" name="foto">
    <br>
    <br>
    <button type="submit">Save</button> 
</form> 