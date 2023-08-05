<?php 
session_start();
$products = isset($_SESSION["products"]) ? $_SESSION["products"] : [];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;600;900&family=Titillium+Web:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/viewPage.css" />
    <title>Earth Store</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <img src="images/logo.png" alt="" class="logo" />
        <div class="links">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="products">
      <div class="container">
        <ul>
        <?php
            if(!empty($products)) {
                foreach($products as $product){
                    echo "<li>
                            <div class='product'>
                                <div class='product'>
                                    <img src='images/poster.jpg'>
                                    <h3>{$product['productName']}</h3>
                                    <p> $ {$product['productPrice']}</p>
                                    <p>{$product['productDate']}</p>
                                    <p>{$product['productDetailes']}</p>
                                </div>
                            </div>
                        </li>";
                }
            }else {
                echo '<li>
                        <div>
                            <h3There is no prodects available</h3>
                        </div>
                    </li>';
            }
        ?>
        </ul>
      </div>
    </div>
    <hr>
    <div class="footer">
      <div class="container">
        <div class="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="logo">
          <img src="images/logo.png" alt="">
        </div>
        <div class="copyright">
          <small>Copyright © 2023 Planet Earth Store</small>
        </div>
      </div>
    </div>
  </body>
</html>   