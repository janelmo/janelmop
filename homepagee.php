<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="stylehome2.css"> 
</head>
<body>

<header>
    <nav>
        <div class="container">
            <h1 class="logo">My Website</h1>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="hero">
    <div class="container">
        <h2>Welcome to My Website!!</h2>
        <p>Jan Elmo's Website</p>
        <button class="btn" onclick="redirectToIndex()">Go to my Website!</button>
    </div>
</section>

<section class="about">
    <div class="container">
        <h2>About me</h2>
        <p></p>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2>Are you ready?</h2>
        <div class="service">
            <h3></h3>
            <p>.</p>
        </div>
        <div class="service">
            <h3></h3>
            <p></p>
        </div>
        <div class="service">
            <h3></h3>
            <p>To see is to believe.</p>
        </div>
    </div>
</section>

<script>
    function redirectToIndex() {
        window.location.href = 'index.php';
    }
</script>

</body>
</html>
