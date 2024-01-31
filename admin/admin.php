<?php
require('../connection/conn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Football Shop</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
</head>
<body>
    

    <section class="home">
            <?php include 'admin-header.php'; ?>


        <div class="content">
            <div class="textBox">
                <h2><br><span></span>Online Shop<br><span>Football</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo et, molestias sequi ratione eos quaerat commodi culpa, explicabo ut nulla, nam qui facilis exercitationem eum consectetur sit temporibus? Beatae.
                </p>
                <a href="admin-products.php">View All Products</a>
            </div   
        </div>

        <ul class="thumb">
            <li><img src="../image/ball.png" alt="ball" onclick="imgSlider('../image/ball.png');"></li>
            <li><img src="../image/footballJersey.png" alt="footballJersey" onclick="imgSlider('../image/footballJersey.png');"></li>
            <li><img src="../image/footballBoots.png" alt="FootballBoots" onclick="imgSlider('../image/footballBoots.png');"></li>
        </ul>

    </section>

    
    <div class="contact-heading">
    <h1>Contact Me</h1>
  </div>
    <section id="contact-section">
    
    <div class="flip-card-container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="../image/kenan.png" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <h1>Kenan Havic</h1>
                    <h3>Position: </h3>
                    <p>Backend developer</p>
                    <h3>Age: </h3>
                    <p>21y</p>
                    <h3>Email: </h3>
                    <p>kenanhavic@gmail.com</p>
                    <h3>Phone: </h3>
                    <p>+38762432595</p>
                    <h2>KENO</h2>
                </div>
            </div>
        </div>

        
</section>




</body>
</html>

