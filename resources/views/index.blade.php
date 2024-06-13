<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTOFOLIO</title>
    <link rel="shortcut icon" type="x-icon" href="assets/zzzz-removebg-preview.png">
   
    
</head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<header class="header">
    <a href="a" class="mylogo">PORTOFOLIO</a>
    <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a></li>
            <a href="contacts.html">contacts</a>     
    </nav>
</header>

<main class="home">
<article>
    <div>
     <div class="content">
        <h3>Hallo, I'ts Me</h3>
        <h1>{{$name}}</h1>
        <h3>saya berumur {{$age}}</h3>
        <h3>saya kelas {{$kelas}}</h3>
        <h2>and i'm a</h2>
        <p>student at wikrama vocational high school.</p>
    </article>
</div>
    <div class="gambar">
        <img class="image-container" src="{{ asset('assets/aku.png') }}" alt="niisa">
    </div>


</main>

<footer class="footer">
    <div class="social">
        <a href="https://www.instagram.com/nizzza.ec/">
            <i class="fa fa-instagram" style="font-size:36px"></i>
        </a>
    </div>
    </footer>



</body>

</html>