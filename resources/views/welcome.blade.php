<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel = "stylesheet" href= "{{asset('css/style.css')}}">
</head>
<body>
    <div class="hero">
        <nav>
        <img src="{{ asset('img/logo.png') }}" alt="Ashish logo" class="logo">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="http://127.0.0.1:8000/services">SERVICES</a></li>
            <li><a href="http://127.0.0.1:8000/portfolio">PORTFOLIO</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">HIRE ME</a></li>
        </ul>
        </nav>
        <div class="dete1">
            <h1>I'M ASHISH <span>WAGLE</span></h1>
            <p>This is my official portfolio website
            </p>
        </div>
        <div class="images">
        <img src="{{ asset('img/work.png') }}" alt="work" >
        </div>
    </div>
    <div class="footer">
        <p>Copyright Ashish, 2023</p>
    </div>
</body>
</html>