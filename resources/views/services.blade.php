<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href= "{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
<div class="hero">
        <nav>
        <img src="{{ asset('img/logo.png') }}" alt="Ashish logo" class="logo">
        <ul>
            <li><a href="http://127.0.0.1:8000">HOME</a></li>
            <li><a href="http://127.0.0.1:8000/services">SERVICES</a></li>
            <li><a href="http://127.0.0.1:8000/portfolio">PORTFOLIO</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">HIRE ME</a></li>
        </ul>
        </nav>

	<main>
		<section>
			<h2>Web Design</h2>
			<p>We create beautiful, responsive websites that are optimized for search engines and user experience.</p>
			<img src="{{ asset('img/web.jpg') }}" alt="web designing">
		</section>
		<section>
			<h2>Mobile Development</h2>
			<p>We build mobile apps that are fast, reliable, and user-friendly for iOS and Android platforms.</p>
			<img src="{{ asset('img/mobile.jpg') }}" alt="mobile development">
		</section>
		<section>
			<h2>Digital Marketing</h2>
			<p>We help businesses grow and reach their target audience through SEO, social media, and online advertising.</p>
			<img src="{{ asset('img/marketing.jpg') }}" alt="digital marketing">
		</section>
        <section>
			<h2>Project Management</h2>
			<p>We create beautiful, responsive websites that are optimized for search engines and user experience.</p>
			<img src="{{ asset('img/project management.jpg') }}" alt="project management">
		</section>
		<section>
			<h2>Data Analysis</h2>
			<p>We build mobile apps that are fast, reliable, and user-friendly for iOS and Android platforms.</p>
			<img src="{{ asset('img/data analysis.jpg') }}" alt="data analysis">
		</section>
		<section>
			<h2>Cloud Computing</h2>
			<p>We help businesses grow and reach their target audience through SEO, social media, and online advertising.</p>
			<img src="{{ asset('img/cloud computing.jpg') }}" alt="cloud computing">
		</section>
	</main>
</div>
<div class="footer">
        <p>Copyright Ashish, 2023</p>
    </div>
</body>
</html>