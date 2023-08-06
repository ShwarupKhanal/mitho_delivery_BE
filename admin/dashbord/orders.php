<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Orders</title>
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
      overflow-y: auto;
      margin-left: 250px;
    }
    
    .orders-table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .orders-table th,
    .orders-table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }
    
    .orders-table th {
      background-color: #f2f2f2;
    }
    
    .delivered-icon {
      color: #008000;
    }
    
    .not-delivered-icon {
      color: #ff0000;
    }
    
    .delivered-button {
      background-color: #008000;
      color: #fff;
      border: none;
      padding: 6px 10px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
    }
    
    .note-text {
      float: right;
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
  <?php require_once("./components/sidebar.php");?>
    <div class="content">
      <h2>Orders</h2>
      <div class="note-text">
        <i class="fas fa-check-circle delivered-icon"></i> Delivered
        <i class="fas fa-times-circle not-delivered-icon"></i> Cancelled
      </div>
      <table class="orders-table">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Food Name</th>
            <th>Food Type</th>
            <th>Delivery Address</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Phone Number</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Chicken Biryani</td>
            <td>Non-Vegetarian</td>
            <td>123 Main St</td>
            <td>2</td>
            <td>$20</td>
            <td>123-456-7890</td>
            <td><i class="fas fa-check-circle delivered-icon"></i></td>
          </tr>
          <tr>
            <td>002</td>
            <td>Pizza Margherita</td>
            <td>Vegetarian</td>
            <td>456 Elm St</td>
            <td>1</td>
            <td>$15</td>
            <td>987-654-3210</td>
            <td><i class="fas fa-times-circle not-delivered-icon"></i></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Grilled Salmon</td>
            <td>Seafood</td>
            <td>789 Oak St</td>
            <td>3</td>
            <td>$30</td>
            <td>555-555-5555</td>
            <td><button class="delivered-button">Mark Delivered</button></td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>
</body>
</html>
