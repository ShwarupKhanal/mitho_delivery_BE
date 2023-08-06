<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="settings.css">
  
</head>
<body>
  <div class="container">
  <?php require_once("./components/sidebar.php");?>
    <div class="content">
      <h2>Settings</h2>
      <div class="settings-form">
        <form>          
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required>
          
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
          
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          
          <label for="restaurant-name">Restaurant Name:</label>
          <input type="text" id="restaurant-name" name="restaurant-name" required>
          
          <label for="restaurant-address">Restaurant Address:</label>
          <textarea id="restaurant-address" name="restaurant-address" rows="4" required></textarea>
          
          <button type="submit">Save Changes</button>

          <button type="button">Change Password</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
