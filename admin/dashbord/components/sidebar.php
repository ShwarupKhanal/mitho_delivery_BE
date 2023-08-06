<?php
session_start();
if(!isset($_SESSION["uid"]))
{
    header("Location:../login");
    exit();
}?>
<div class="sidebar">
      <ul>
        <li><a href="./index.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="./orders.php"><i class="fas fa-shopping-cart"></i> Orders</a></li>
        <li><a href="./food_items.php"><i class="fas fa-hamburger"></i> Food Items</a></li>
        <!-- <li><a href=""><i class="fas fa-users"></i> Customers</a></li> -->
        <li><a href="./settings.php"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </div>