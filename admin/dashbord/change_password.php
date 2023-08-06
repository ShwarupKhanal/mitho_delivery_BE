<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }
    
    .container {
      display: flex;
      height: 100vh; /* Set the height of the container to 100vh */
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
    }
    
    .settings-form {
      max-width: 70%;
      margin: 0 auto;
      width: 100%;
    }
    
    .settings-form label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    .settings-form input,
    .settings-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .settings-form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
  <?php require_once("./components/sidebar.php");?>
    <div class="content">
      <h2>Change Password</h2>
      <div class="settings-form">
        <form>          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <label for="c-password">Confirm Password:</label>
          <input type="password" id="c-password" name="c-password" required>
          <button type="submit">Save Changes</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
