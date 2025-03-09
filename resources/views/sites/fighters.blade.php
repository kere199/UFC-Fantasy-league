<!-- resources/views/sited/fighters.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Fighters</title>
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
        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            color: #FFD700;
            margin-bottom: 30px;
        }
        .fighters-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .fighter-card {
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #FFD700;
            text-align: center;
        }
        .fighter-card h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #FFD700;
        }
        .fighter-card p {
            font-size: 16px;
            margin: 5px 0;
        }
        .fighter-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #FFD700;
            color: #000000;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .fighter-card a:hover {
            background-color: #FFA500;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <h1>Our Fighters</h1>
    <div class="fighters-grid">
        @foreach ($fighters as $fighter)
            <div class="fighter-card">
                <h2>{{ $fighter->name }}</h2>
                <p>Birthday: {{ $fighter->birthday->format('Y-m-d') }}</p>
                <p>Weightclass: {{ $fighter->weightclass }}</p>
                <a href="{{ route('fighters.show', $fighter) }}">View Details</a>
            </div>
        @endforeach
    </div>
</main>

<x-site-layout-footer/>
</body>
</html>
