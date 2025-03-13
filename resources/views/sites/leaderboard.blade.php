<!-- resources/views/sited/leaderboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Leaderboard</title>
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
        .leaderboard-content {
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
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #FFD700;
        }
        th {
            background-color: #FFD700;
            color: #000000;
            font-weight: bold;
        }
        tr:nth-child(1) td {
            background-color: #FFD700;
            color: #000000;
            font-weight: bold;
        }
        tr:nth-child(2) td {
            background-color: #C0C0C0;
            color: #000000;
        }
        tr:nth-child(3) td {
            background-color: #CD7F32;
            color: #000000;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a, .pagination span {
            color: #FFD700;
            padding: 8px 12px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .pagination a:hover {
            background-color: #FFA500;
            border-radius: 5px;
        }
        .pagination .current {
            background-color: #FFD700;
            color: #000000;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <section class="leaderboard-content">
        <h1>Leaderboard</h1>

        <table>
            <thead>
            <tr>
                <th>Rank</th>
                <th>Username</th>
                <th>Points</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->points }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $users->links() }}
        </div>
    </section>
</main>

<x-site-layout-footer/>
</body>
</html>
