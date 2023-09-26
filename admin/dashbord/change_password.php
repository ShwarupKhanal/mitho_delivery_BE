<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Settings</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="change_password.css">
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
