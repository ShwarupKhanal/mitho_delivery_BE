<!DOCTYPE html>
<html>
<head>
  <title>Mitho Food Delivery Admin Dashboard - Add Food</title>
  <link rel="stylesheet" href="add_food.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


  <div class="container">
  <?php require_once("./components/sidebar.php");?>
  <?php
require_once("../../db.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$rid= $_SESSION["uid"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foodName = $_POST["food-name"];
    $foodCategory = $_POST["food-category"];
    $foodType = $_POST["food-type"];
    $foodDescription = $_POST["food-description"];
    $foodPrice = $_POST["food-price"];
    
    echo $rid;
    $imageData = file_get_contents($_FILES["food-pictures"]["tmp_name"]);
    $imageData = $conn->real_escape_string($imageData);

    $sql = "INSERT INTO Food (rid,food_name, food_category, food_type, description, price, picture)
            VALUES ('$rid','$foodName', '$foodCategory', '$foodType', '$foodDescription', $foodPrice, '$imageData')";

    if ($conn->query($sql) === TRUE) {
        echo "Food added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
    <div class="content">
      <div class="add-food-form">
        <h2>Add Food</h2>
        <form action="add_food.php" method="POST" enctype="multipart/form-data">

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
            <option value="non-veg">Non-Veg</option>
            
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
