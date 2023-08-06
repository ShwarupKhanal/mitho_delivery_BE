<!DOCTYPE html>
<html>
<head>
  <title>Food Delivery - Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }
    
    .navbar {
      background-color: #333;
      color: #fff;
      padding: 20px;
      position: relative;
    }
    
    .navbar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: flex-end;
    }
    
    .navbar li {
      margin-left: 20px;
    }
    
    .navbar a {
      color: #fff;
      text-decoration: none;
    }
    
    .banner {
      position: relative;
        height: 85vh;
      overflow: hidden;
    }
    
    .banner-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .search-section {
      padding: 60px 20px;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;
      width: 100%;
    }
    
    .search-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    
    .search-section p {
      font-size: 18px;
      margin-bottom: 40px;
    }
    
    .search-form {
      max-width: 500px;
      margin: 0 auto;
    }
    
    .search-form input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }
    
    .search-form button {
      background-color: #FFCC00;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease-in-out;
    }
    
    .search-form button:hover {
      background-color: #FFD700;
    }
    
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    .footer p {
      margin: 0;
    }
  </style>
</head>
<body>
  <?php
  require_once("./navbar.php");
  ?>
  
  <div class="banner">
    <img src="./food.jpg" class="banner-image" alt="Banner Image">
    <div class="search-section">
      <h2>Search for Your Favorite Food</h2>
      <p>Enter your desired food item below and find the best restaurants near you.</p>
      <div class="search-form">
        <input type="text" placeholder="Enter food item" />
        <button type="submit">Search</button>
      </div>
    </div>
  </div>
  
  <div class="footer">
    <p>&copy; 2023 Food Delivery. All rights reserved.</p>
  </div>
</body>
</html>
