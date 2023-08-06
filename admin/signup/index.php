<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="form-container" id="login-form">
          <h1>Sign Up</h1>
          <form action="sign-up.php" method="POST">
            <?php
            session_start();
            if(isset($_SESSION["uid"]))
            {
                header("Location:../dashbord/index.php");
                exit();
            }
                            require_once("db.php");
                            if(isset($_POST["email"])&&isset($_POST["password"]))
                    {
                            if($_POST["password"]==$_POST["confirm-password"])
                            {
                                $u_email=$_POST["email"];
                                $u_name=$_POST["username"];
                                $u_password=$_POST["password"];
                                if(strlen($u_password)>=8 && strlen($u_password)<=10 ){
                                    $query="INSERT INTO users (u_name,u_password, u_email)
                                VALUES('$u_name', '$u_password', '$u_email');";
                                mysqli_query($conn,$query);
                                header("Location: sign-in.php"); 
                                }else{
                                    echo "<p style='color:red;'>MINIMUN REQUIRED 8 CHARACTERS</p>";
                                }
                        }
                        else{
                            echo "<p style='color:red;'>ENTER SAME PASSWORD</p>";
                        }
                            }
                            ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <button type="submit">Sign up</button>
          </form>
          <p>Have an account? <a href="sign-in.php" id="sign-in.php">Login</a></p>
        </div>
    
    
      </div>
</body>
</html>