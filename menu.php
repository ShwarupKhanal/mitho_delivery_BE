<!DOCTYPE html>
<html>
<head>
  <title>Food Delivery - Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="menu.css">
  <style>
   
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
  
  <div class="menu-item" id="search-results">
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
