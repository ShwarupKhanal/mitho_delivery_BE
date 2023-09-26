<!DOCTYPE html>
<html>
<head>
  <title>Food Delivery - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="home.css">
 
</head>
<body>
  <?php
  require_once("./navbar.php");
  ?>
  
  <div class="banner">
    <img src="./food.jpg" class="banner-image" alt="Banner Image">
    <div class="search-section">
      <h2>Search for Your Favorite Food</h2>
      <p>Go to menu and explore</p>
      <div class="search-form">
    
        <button type="submit" onclick="window.location.href='./menu.php'">Menu</button>
      </div>
    </div>
  </div>
  
  <div class="footer">
    <p>&copy; 2023 Food Delivery. All rights reserved.</p>
  </div>
</body>
</html>
