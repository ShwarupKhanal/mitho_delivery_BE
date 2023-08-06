<!DOCTYPE html>
<html>
<head>
  <title>Food Delivery - Menu</title>
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
    
    .menu-header {
      background-color: #f7f7f7;
      padding: 20px;
    }
    
    .menu-header input[type="text"] {
      width: 300px;
      padding: 10px;
      margin-right: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .menu-header select {
      padding: 10px;
      margin-right: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .menu-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }
    
    .menu-card {
      width: 300px;
      padding: 20px;
      margin: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: center;
    }
    
    .menu-card img {
      width: 100%; /* This ensures the image takes the full width of its container */
      height: auto; /* This maintains the aspect ratio of the image */
      object-fit: cover; /* This scales the image while maintaining its aspect ratio */
      border-radius: 4px;
      margin-bottom: 10px;
    }

    .menu-item:after {
      content: "";
      display: table;
      clear: both;
    }
    
    .menu-card h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .menu-card p {
      font-size: 16px;
      margin-bottom: 10px;
    }
    
    .menu-card span {
      font-weight: bold;
    }
    
    .menu-card .button {
      background-color: #FFCC00;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      margin-top: 10px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease-in-out;
    }
    
    .menu-card .button:hover {
      background-color: #FFD700;
    }
    
    .menu-footer {
      margin-top: 20px;
      text-align: center;
    }
    
    .menu-footer select {
      padding: 10px;
      margin-right: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    
    .menu-footer input[type="range"] {
      width: 300px;
      padding: 0;
      margin-top: 10px;
      margin-right: 10px;
      border: none;
    }
    
    .menu-footer .button {
      background-color: #FFCC00;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease-in-out;
    }
    
    .menu-footer .button:hover {
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
  require_once("./db.php");
  
  ?>
  
  <div class="menu-header">
  <div class="search-section">
    <input type="text" id="search-input" placeholder="Search food" />

</div>
    <select>
      <option value="">All Categories</option>
      <option value="appetizer">Appetizer</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select>
    <div class="menu-footer">
        <select>
          <option value="asc">Sort by Name (Ascending)</option>
          <option value="desc">Sort by Name (Descending)</option>
        </select>
        <input type="range" min="0" max="100" step="10" value="0" />
        <span>Price Range:</span>
        <span>$0</span>
        <input type="range" min="0" max="100" step="10" value="100" />
        <span>$100</span>
        <button class="button">Apply Filters</button>
      </div>
  </div>
  
  <div class="menu-item">
  <div id="search-results"></div>
  <?php
require_once("./db.php");


?>

    <script>
$(document).ready(function() {
    $("#search-input").on("input", function() {
        var searchTerm = $(this).val().trim();

        if (searchTerm !== "") {
            $.ajax({
                url: "ajax_search.php",
                type: "GET",
                data: { term: searchTerm },
                dataType: "json",
                success: function(response) {
                    var resultsDiv = $("#search-results");
                    resultsDiv.empty();

                    if (response.length > 0) {
                        response.forEach(function(item) {
                            resultsDiv.append("<div class='menu-card'>" +
                                "<img src='data:image/jpeg;base64," + item.picture + "' alt='" + item.food_name + "'>" +
                                "<h3>" + item.food_name + "</h3>" +
                                "<p><span>Price:</span> Rs" + item.price + "</p>" +
                                "<p><span>Category:</span> " + item.food_category + "</p>" +
                                "<a href='#' class='button'>View Details</a>" +
                            "</div>");
                        });
                    } else {
                        resultsDiv.append("<div>No matching items found.</div>");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log("AJAX Error:", textStatus, errorThrown);
                }
            });
        } else {
            $("#search-results").empty();
        }
    });
});
</script>
    
    
  </div>
  
  
  
  <div class="footer">
    <p>&copy; 2023 Food Delivery. All rights reserved.</p>
  </div>
</body>
</html>
