<!-- resources/views/admin/fighters/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Admin Fighters</title>
    <style>
        body {
            background-color: #000000;
            color: #FFD700;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex-grow: 1;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .admin-content {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #FFD700;
        }
        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #FFD700;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #FFD700;
        }
        th {
            background-color: #FFD700;
            color: #000000;
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .message.success {
            background-color: #28a745;
            color: #fff;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #FFD700;
            color: #000000;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn:hover {
            background-color: #FFA500;
            transform: scale(1.05);
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <section class="admin-content">
        <h1>Manage Fighters</h1>

        @if (session('success'))
            <div class="message success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.run-season') }}" method="POST" style="text-align: center; margin-bottom: 20px;">
            @csrf
            <button type="submit" class="btn" style="background-color: #28a745; color: #fff;">Run Season</button>
        </form>

        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Weightclass</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($fighters as $fighter)
                <tr>
                    <td>{{ $fighter->name }}</td>
                    <td>{{ $fighter->weightclass }}</td>
                    <td>{{ $fighter->price }} coins</td>
                    <td>
                        <a href="{{ route('admin.fighters.edit', $fighter) }}" class="btn">Edit</a>
                        <form action="{{ route('admin.fighters.destroy', $fighter) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete {{ $fighter->name }}?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div style="margin-top: 20px; text-align: center;">
            {{ $fighters->links() }}
        </div>
    </section>
</main>

<x-site-layout-footer/>
</body>
</html>
