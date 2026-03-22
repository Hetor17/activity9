<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body style="font-family: sans-serif; margin: 0; padding: 0;">
    <nav style="background-color: #333; padding: 15px; text-align: right;">
        @if (Route::has('login'))
            <div style="color: white;">
                @auth
                    <a href="{{ url('/dashboard') }}" style="color: white; margin-left: 15px; text-decoration: none;">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" style="color: white; margin-left: 15px; text-decoration: none;">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="color: white; margin-left: 15px; text-decoration: none;">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>
    <main style="padding: 40px; text-align: center;">
        <h1>Welcome to the Public Landing Page</h1>
        <p>This is the public area. Please log in or register to access the secure dashboard.</p>
    </main>
</body>
</html>