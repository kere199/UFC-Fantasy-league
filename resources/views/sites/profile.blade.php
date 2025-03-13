<!-- resources/views/sited/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Profile</title>
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
        .profile-content {
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
        .info {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .fighters-list {
            margin-top: 30px;
        }
        .fighters-list h2 {
            font-size: 24px;
            font-weight: bold;
            color: #FFD700;
            margin-bottom: 15px;
        }
        .fighters-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .fighter-card {
            background-color: #000000;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #FFD700;
            text-align: center;
        }
        .fighter-card img {
            width: 100%;
            max-width: 150px;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .fighter-card p {
            margin: 5px 0;
            font-size: 16px;
        }
        .fighter-card button {
            display: inline-block;
            width: 120px; /* Fixed width for consistency */
            margin-top: 10px; /* Spacing above button */
            padding: 10px 15px; /* Larger padding */
            background-color: #FFD700; /* Gold background */
            color: #000000; /* Black text */
            font-weight: bold; /* Bold text */
            border: none;
            border-radius: 25px; /* Rounded edges */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s; /* Smooth hover and click effect */
        }

        .fighter-card button:hover {
            background-color: #FFA500; /* Orange on hover */
            transform: scale(1.05); /* Slight scale-up on hover */
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <section class="profile-content">
        <h1>{{ $user->name }}'s Profile</h1>
        <div class="info">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Current Balance:</strong> {{ $user->coins }} coins</p>
            <p><strong>Points:</strong> {{ $user->points }}</p>
        </div>

        <div class="fighters-list">
            <h2>Your Fighters</h2>
            @if ($fighters->isEmpty())
                <p>You haven't selected any fighters yet.</p>
            @else
                <div class="fighters-grid">
                    @foreach ($fighters as $fighter)
                        <div class="fighter-card">
                            <img src="{{ $fighter->photo_url }}" alt="{{ $fighter->name }} Photo">
                            <p><strong>{{ $fighter->name }}</strong></p>
                            <p>Price: {{ $fighter->price }} coins</p>
                            <p>Weightclass: {{ $fighter->weightclass }}</p>
                            <form action="{{ route('fighters.destroy', $fighter) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Sell Fighter</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</main>

<x-site-layout-footer/>
</body>
</html>
