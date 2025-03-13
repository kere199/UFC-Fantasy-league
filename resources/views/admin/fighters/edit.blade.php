<!-- resources/views/admin/fighters/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - Edit Fighter</title>
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
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        select, input[type="number"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #FFD700;
            background-color: #000000;
            color: #FFD700;
        }
        button {
            padding: 10px;
            background-color: #FFD700;
            color: #000000;
            font-weight: bold;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        button:hover {
            background-color: #FFA500;
            transform: scale(1.05);
        }
        .error {
            color: #dc3545;
            font-size: 14px;
        }
    </style>
</head>
<body>
<x-site-layout-header/>

<main>
    <section class="admin-content">
        <h1>Edit {{ $fighter->name }}</h1>

        <form action="{{ route('admin.fighters.update', $fighter) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="weightclass">Weightclass</label>
                <select name="weightclass" id="weightclass">
                    @foreach (['Heavyweight', 'Light Heavyweight', 'Middleweight', 'Welterweight', 'Lightweight', 'Featherweight', 'Bantamweight', 'Flyweight'] as $class)
                        <option value="{{ $class }}" {{ $fighter->weightclass === $class ? 'selected' : '' }}>{{ $class }}</option>
                    @endforeach
                </select>
                @error('weightclass')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="price">Price (coins)</label>
                <input type="number" name="price" id="price" value="{{ $fighter->price }}" min="100">
                @error('price')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Update Fighter</button>
        </form>
    </section>
</main>

<x-site-layout-footer/>
</body>
</html>
