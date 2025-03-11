<!-- resources/views/sited/fighter.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - {{ $fighter->name }}</title>
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
        .fighter-details {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #FFD700;
            text-align: center;
        }
        .fighter-details h1 {
            font-size: 36px;
            font-weight: bold;
            color: #FFD700;
            margin-bottom: 20px;
        }
        .fighter-details p {
            font-size: 18px;
            margin: 10px 0;
        }
        .fighter-details a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #FFD700;
            color: #000000;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .fighter-details a:hover {
            background-color: #FFA500;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <div class="fighter-details">
        <img src="{{ $fighter->photo_url }}" alt="{{ $fighter->name }} Photo">
        <h1>{{ $fighter->name }}</h1>
        <p>Birthday: {{ $fighter->birthday->format('Y-m-d') }}</p>
        <p>Weightclass: {{ $fighter->weightclass }}</p>
        <a href="{{ route('fighters.index') }}">Back to Fighters</a>
    </div>
</main>

<x-site-layout-footer/>
</body>
</html>
