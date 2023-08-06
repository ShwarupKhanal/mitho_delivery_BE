<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }
    
    .container {
      display: flex;
      height: 100vh;
    }
    
    .sidebar {
      background-color: #333;
      color: #fff;
      padding: 20px;
      width: 200px;
      position: fixed;
      top: 0;
      bottom: 0;
      overflow-y: auto;
    }
    
    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    .sidebar li {
      margin-bottom: 10px;
    }
    
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
    }
    
    .sidebar a i {
      margin-right: 10px;
    }
    
    .content {
      flex: 1;
      padding: 20px;
      margin-left: 250px; /* Add margin to create space for the sidebar */
      overflow-y: auto;
    }
    
    .food-listing {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px;
    }
    
    .food-card {
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 20px;
      background-color: #f9f9f9;
    }
    
    .food-card h2 {
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .food-card p {
      margin-top: 0;
      margin-bottom: 20px;
    }
    
    .food-card span {
      font-weight: bold;
    }
    
    .food-card img {
      max-width: 100%;
      border-radius: 4px;
      margin-bottom: 10px;
    }
    
    .food-card .edit-button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .add-food-button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<?php require_once("./components/sidebar.php");?>
    <div class="content">
        <div class="food-listing">
          <div class="food-card">
            <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 1">
            <h2>Food Item 1</h2>
            <p>Description of Food Item 1</p>
            <p><span>Price:</span> $9.99</p>
            <button class="edit-button">Edit</button>
          </div>
          <div class="food-card">
            <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 2">
            <h2>Food Item 2</h2>
            <p>Description of Food Item 2</p>
            <p><span>Price:</span> $12.99</p>
            <button class="edit-button">Edit</button>
          </div>
          <div class="food-card">
            <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 3">
            <h2>Food Item 3</h2>
            <p>Description of Food Item 3</p>
            <p><span>Price:</span> $8.49</p>
            <button class="edit-button">Edit</button>
          </div>
          <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 1">
              <h2>Food Item 1</h2>
              <p>Description of Food Item 1</p>
              <p><span>Price:</span> $9.99</p>
              <button class="edit-button">Edit</button>
            </div>
            <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 2">
              <h2>Food Item 2</h2>
              <p>Description of Food Item 2</p>
              <p><span>Price:</span> $12.99</p>
              <button class="edit-button">Edit</button>
            </div>
            <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 3">
              <h2>Food Item 3</h2>
              <p>Description of Food Item 3</p>
              <p><span>Price:</span> $8.49</p>
              <button class="edit-button">Edit</button>
            </div>
            <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 1">
              <h2>Food Item 1</h2>
              <p>Description of Food Item 1</p>
              <p><span>Price:</span> $9.99</p>
              <button class="edit-button">Edit</button>
            </div>
            <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 2">
              <h2>Food Item 2</h2>
              <p>Description of Food Item 2</p>
              <p><span>Price:</span> $12.99</p>
              <button class="edit-button">Edit</button>
            </div>
            <div class="food-card">
              <img src="https://cdn.britannica.com/98/235798-050-3C3BA15D/Hamburger-and-french-fries-paper-box.jpg" alt="Food 3">
              <h2>Food Item 3</h2>
              <p>Description of Food Item 3</p>
              <p><span>Price:</span> $8.49</p>
              <button class="edit-button">Edit</button>
            </div>
        </div>
    </div>    
    
  </div>
</body>
</html>



