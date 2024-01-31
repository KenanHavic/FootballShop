<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Shop</title>
    <link rel="stylesheet" href="../css/products.css">
    <script defer src="../js/products.js"></script>

</head>
<body>
<div id="productsContainer" class="products">

            <ul id="myList">
            <li><a href="admin.php">Home</a></li>
            <li><a href="#">Your cart</a></li>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="changePassword.php">Change password</a></li>
             </ul>
    <div class="search-container">
    <input type="text" id="searchInput" placeholder="Search..."> 
        <button type="button">Search</button>
    </div>
    </div>
    <div class="grid-container">
        <div class="grid-item" id="ball">
            <img src="../image/ball.png" alt="Ball">
            <h3>Ball</h3>
            <p class="price">$99.99</p>
            <p><button id="addToCartBtn_ball">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="footballBoots">
            <img src="../image/footballBoots.png" alt="Football boots">
            <h3>Football boots</h3>
            <p class="price">$99.99</p>
            <p><button id="addToCartBtn_footballBoots">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="trainingHoodie">
            <img src="../image/footballTraining.png" alt="Training hoodie">
            <h3>Training hoodie</h3>
            <p class="price">$49.99</p>
            <p><button id="addToCartBtn_trainingHoodie">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="footballJersey">
            <img src="../image/footballJersey.png" alt="Football jersey">
            <h3>Football jersey</h3>
            <p class="price">$44.99</p>
            <p><button id="addToCartBtn_footballJersey">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="footballSocks">
            <img src="../image/footballSocks.png" alt="Football socks">
            <h3>Football socks</h3>
            <p class="price">$5.99</p>
            <p><button id="addToCartBtn_footballSocks">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="shinPads">
            <img src="../image/shinPads.png" alt="Shin pads">
            <h3>Shin pads</h3>
            <p class="price">$19.99</p>
            <p><button id="addToCartBtn_shinPads">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="windRunner">
            <img src="../image/windrunner.png" alt="Wind runner">
            <h3>Wind runner</h3>
            <p class="price">$49.99</p>
            <p><button id="addToCartBtn_windRunner">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="headWear">
            <img src="../image/headwear.png" alt="Head wear">
            <h3>Head wear</h3>
            <p class="price">$14.99</p>
            <p><button id="addToCartBtn_headWear">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="thermalShorts">
            <img src="../image/thermalShorts.png" alt="Thermal shorts">
            <h3>Thermal shorts</h3>
            <p class="price">$19.99</p>
            <p><button id="addToCartBtn_thermalShorts">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="thermalShirt">
            <img src="../image/thermalShirt.png" alt="Thermal shirt">
            <h3>Thermal shirt</h3>
            <p class="price">$19.99</p>
            <p><button id="addToCartBtn_thermalShirt">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="footballShorts">
            <img src="../image/footballShorts.png" alt="Football shorts">
            <h3>Football shorts</h3>
            <p class="price">$24.99</p>
            <p><button id="addToCartBtn_footballShorts">Add to Cart</button></p>

        </div>
        <div class="grid-item" id="bag">
            <img src="../image/bag.png" alt="Bag">
            <h3>NIKE bag</h3>
            <p class="price">$22.99</p>
            <p><button id="addToCartBtn_bag">Add to Cart</button></p>

        </div>
    </div>
</div>
</body>
</html>
