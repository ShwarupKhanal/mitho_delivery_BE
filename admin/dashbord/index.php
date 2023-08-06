<!DOCTYPE html>
<html>
<head>
  <title>Food Delivery Admin Dashboard - Welcome</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f7f7f7;
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
      margin-left: 250px;
      overflow-y: auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .welcome-message {
      max-width: 600px;
      text-align: center;
    }
    
    .welcome-message h2 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #333;
    }
    
    .welcome-message p {
      font-size: 18px;
      color: #666;
      line-height: 1.5;
    }
    
    .welcome-message a {
      color: #333;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php require_once("./components/sidebar.php");?>
    <div class="content">
      <div class="welcome-message">
        <h2>Welcome to Mitho Food Delivery Admin Dashboard</h2>
        <p>Please use the menu on the left to navigate through the various sections of the dashboard.</p>
        <p>If you need any assistance, please contact our support team.</p>
        <p><a href="mailto:support@fooddelivery.com">support@mithofooddelivery.com</a></p>
      </div>
    </div>
  </div>
</body>
</html>
