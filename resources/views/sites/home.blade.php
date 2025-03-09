<!-- resources/views/sited/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Home</title>
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
        .content {
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
        p.intro {
            font-size: 18px;
            text-align: center;
            font-style: italic;
            margin-bottom: 30px;
        }
        .description {
            background-color: #000000;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #FFD700;
        }
        .description h2 {
            font-size: 24px;
            font-weight: bold;
            color: #FFD700;
            margin-bottom: 15px;
        }
        .description ul {
            list-style-type: none;
            padding: 0;
        }
        .description li {
            margin-bottom: 15px;
            font-size: 16px;
            display: flex;
            align-items: flex-start;
        }
        .description li::before {
            content: "★";
            color: #FFD700;
            margin-right: 10px;
        }
        .button {
            display: block;
            width: 200px;
            margin: 30px auto 0;
            padding: 12px;
            background-color: #FFD700;
            color: #000000;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 25px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #FFA500;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <section class="content">
        <h1>Welcome to UFC Fantasy League</h1>
        <p class="intro">Unleash Your Inner Strategist and Build the Ultimate UFC Team!</p>
        <div class="description">
            <h2>How It Works</h2>
            <ul>
                <li>Sign up and receive <strong>3000 coins</strong> to start your journey.</li>
                <li>Draft elite UFC fighters, each priced based on their prowess and skill.</li>
                <li>Assemble your dream team and watch them battle in real UFC matches.</li>
                <li>Earn points with every victory and stellar performance from your fighters.</li>
                <li>Compete on the leaderboard to become the ultimate UFC fantasy champion!</li>
            </ul>
        </div>
        <a href="#" class="button">Join the Fight Now</a>
    </section>
</main>

<x-site-layout-footer/>
</body>
</html>
