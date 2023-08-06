<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Orders</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="orders.css">
 
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
