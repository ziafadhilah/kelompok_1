<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
        }
        aside {
            width: 200px;
            background-color: #007BFF;
            color: #fff;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        aside h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        aside ul {
            list-style: none;
            padding: 0;
        }
        aside ul li {
            margin-bottom: 15px;
        }
        aside ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }
        aside ul li a:hover {
            background-color: #0056b3;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        a {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 20px;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #007BFF;
            color: #fff;
        }
        thead th {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        tbody td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #f1f7ff;
        }
        .action-buttons a,
        .action-buttons button {
            margin-right: 10px;
            padding: 5px 10px;
            font-size: 12px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .action-buttons a {
            background-color: #28a745;
            color: #fff;
        }
        .action-buttons a:hover {
            background-color: #218838;
        }
        .action-buttons button {
            background-color: #dc3545;
            color: #fff;
        }
        .action-buttons button:hover {
            background-color: #c82333;
        }
        form {
            display: inline;
        }
        
    </style>
</head>
<body>

    <aside>
    <div class="menu-header">
        <a href="https://ibb.co.com/5LhWJJg">
            <img src="https://i.ibb.co.com/5LhWJJg/temu.png" alt="temu" border="0" width="80" height="80">
        </a>
        <h2>Menu</h2>
    </div>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/barang">Barang</a></li>
            <li><a href="/category">Category</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </aside>

    <main>
        <a href="/category/create">Tambah Kategori</a>

        <table>
            <thead>
                <tr> 
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th> 
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody> 
                @foreach ($category as $data)
                <tr> 
                    <td>{{ $data->category_code }}</td>
                    <td>{{ $data->name }}</td> 
                    <td class="action-buttons">
                    <a href="{{ url('category/' . $data->id . '/edit') }}" class="btn btn-success btn-sm">Edit</a>
                    <form action="{{ url('category/' . $data->id) }}" method="POST" style="display:inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    </td>
                </tr> 
                @endforeach 
            </tbody>
        </table>
    </main>

</body>
</html>
