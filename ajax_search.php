<?php
require_once("./db.php");

if (isset($_GET["term"])) {
    $term = $_GET["term"];
    $sql = "SELECT * FROM Food WHERE food_name LIKE '%$term%'";
    $result = $conn->query($sql);
    $matchingItems = array(); // Initialize an empty array to store the items

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $row['picture']= base64_encode($row['picture']);
            $matchingItems[] = array_map('utf8_encode',$row);
        }
    }
    
    // Encode the array into JSON format
    echo json_encode($matchingItems);
    
}

$conn->close();
?>
