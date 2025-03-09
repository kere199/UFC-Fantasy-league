<!-- resources/views/components/site-layout-header.blade.php -->
<header style="background-color: #000000; color: #FFD700; padding: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.5);">
    <nav style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <div style="font-size: 28px; font-weight: bold;">
            <a href="{{ route('home') }}" style="color: #FFD700; text-decoration: none; transition: color 0.2s;">UFC Fantasy League</a>
        </div>
        <ul style="list-style: none; display: flex; gap: 20px; margin: 0; padding: 0;">
            <li><a href="{{ route('home') }}" style="color: #FFD700; text-decoration: none; transition: color 0.2s;">Home</a></li>
            <li><a href="#" style="color: #FFD700; text-decoration: none; transition: color 0.2s;">Register</a></li>
            <li><a href="#" style="color: #FFD700; text-decoration: none; transition: color 0.2s;">Login</a></li>
        </ul>
    </nav>
</header>
<style>
    header a:hover {
        color: #FFA500;
    }
</style>
