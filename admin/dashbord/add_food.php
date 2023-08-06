<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Add Food</title>
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
    }
    
    .add-food-form {
      max-width: 800px; /* Increase the max-width to make the form wider */
      margin: 0 auto;
      width: 100%;
    }
    
    .add-food-form label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    .add-food-form input,
    .add-food-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .add-food-form button {
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
      <div class="add-food-form">
        <h2>Add Food</h2>
        <form>
          <label for="food-name">Food Name:</label>
          <input type="text" id="food-name" name="food-name" required>
          
          <label for="food-category">Food Category:</label>
          <select id="food-category" name="food-category" required>
            <option value="">Select Category</option>
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <option value="snacks">Snacks</option>
          </select>
          
          <label for="food-type">Food Type:</label>
          <select id="food-type" name="food-type" required>
            <option value="">Select Type</option>
            <option value="vegetarian">Vegetarian</option>
            <option value="vegan">Vegan</option>
            <option value="gluten-free">Gluten-Free</option>
            <option value="dairy-free">Dairy-Free</option>
          </select>
          
          <label for="food-description">Description:</label>
          <textarea id="food-description" name="food-description" rows="6" cols="100" required></textarea>
          
          <label for="food-price">Price:</label>
          <input type="number" id="food-price" name="food-price" step="0.01" required>
          
          <label for="food-pictures">Pictures:</label>
          <input type="file" id="food-pictures" name="food-pictures" accept="image/*" multiple required>
          
          <button type="submit">Add Food</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
