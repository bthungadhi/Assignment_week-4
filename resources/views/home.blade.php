<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="body">
    <div class="container">
        <h1 class="judul">Welcome to the Home Page</h1>
        <p>This is the home page of our application.</p>
    </div>  
    <script src="{{ asset('js/app.js') }}"></script>
    <a href="/welcome" style="color: #fff;">Welcome</a>
    <img src="img\member5.jpeg" alt="Logo" style="width: 100px; height: auto;">
    <a href="/blog" style="color: #fff;">Blog</a>
    <a href="/contact" style="color: #fff;">Contact</a>
    <a href="/about" style="color: #fff;">About</a>
</body>
</html>