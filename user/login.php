<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">0-6
</head>
<body>
    
    <div class="container">
        <div class="form-container" id="login-form">
          <h1>Login</h1>
          <form action="" method="POST">
                <img class="login-logo" src="../img/Healthy_food_logo_template._Organic_food_vector_design._Fork_spoon_and_leaves_logotype.png" alt="logo of mitho delivary">
                <?php

session_start();
        
    require_once("../userdb.php");
    if(isset($_POST["email"])&&isset($_POST["password"])){      
        $u_email=$_POST["email"];
        $u_password=$_POST["password"];
        $query="select * from users where u_email='$u_email';";
        $result=mysqli_query($conn,$query);
        $user = mysqli_fetch_assoc($result);
       if ($user) {
    if ($user["u_password"] == $u_password) {
        $_SESSION["uid"] = $user["u_id"];
        echo '<script>window.location.href = "menu.html";</script>';
    } else {
        echo "<p style='color:red;'>Incorrect Password</p>";
    }
} else {
    echo "<p style='color:red;'>Incorrect Email</p>";
}

    }

        ?>
            <label for="username">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" >Login</button> 
          </form>
          <p>Don't have an account? <a href="./signup.php" id="signup.php">Sign up</a></p>
        </div>
    
      </div>
</body>
</html>