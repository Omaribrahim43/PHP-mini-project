<?php
session_start();

if(!isset($_SESSION["products"])){
  $_SESSION["products"] = [];
}

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
  $products = [
    "productImage" => $_POST["productImage"],
    "productName" => $_POST["productName"],
    "productPrice" => $_POST["productPrice"],
    "productDetailes" => $_POST["productDetailes"],
    "productDate" => $_POST["productDate"]
  ];
  array_push($_SESSION['products'], $products);

  header("Location: ".$_SERVER["PHP_SELF"]."?".uniqid());
  exit();
}
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
    <link rel="stylesheet" href="css/index.css" />
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
            <li><a href="viewPage.php">Shop</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="landing">
      <div class="intro-text">
        <h1>EARTH</h1>
        <p>MULTIPURPOSE STORE</p>
        <button href="viewPage.php">SHOP NOW</button>
      </div>
    </div>
    <div class="add_product">
      <form action="" method="POST">
        
        <div class="container">
          <h2>ADD PRODUCT</h2>
          <div>
          <label for="productName">Product Image</label><br>
          <input type="file" accept="image/*" id="imageInput" name="productImage" />
          </div>
          <div class="input-feild">
            <label for="productName">Product Name</label><br>
            <input type="text" name="productName" required><br>
          </div>

          <div class="input-feild">
            <label for="productPrice">Product Price</label><br>
            <input type="text" name="productPrice" required><br>
          </div>

          <div class="input-feild">
            <label for="productDetailes">Product Detailes</label><br>
            <input type="text" name="productDetailes" required><br>
          </div>

          <div class="input-feild">
            <label for="productDate">Date</label><br>
            <input type="text" name="productDate" required><br>
          </div>
          <div class="submit">
            <button type="submit" name="submit">ADD PRODUCT</button>
          </div>
        </div>
      </form>
    </div>
    <div class="show_product">
      <div class="container">
        <h2>Products</h2>
        <table>
          <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Details</th>
            <th>Date</th>
          </thead>
          <tbody>
            <?php
              foreach($_SESSION["products"] as $product) {
                echo "<tr>";
                echo "<td><img style='width:50px; border-radius:50%;' src='images/{$product['productImage']}'></td>";
                echo "<td>{$product['productName']}</td>";
                echo "<td> $ {$product['productPrice']}</td>";
                echo "<td>{$product['productDetailes']}</td>";
                echo "<td>{$product['productDate']}</td>";
                echo '</tr>';
              }
            ?>
          </tbody>
        </table>
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
