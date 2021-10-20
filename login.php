<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Home.php");
    exit;
}
 
// Include config file
include "conn.php";
 
// Define variables and initialize with empty values
$username = $password = $admin = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["Username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["Username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["Password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["Password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, user_name, administrator, password FROM members WHERE user_name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $admin, $DBPassword,);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $DBPassword){
                            // Password is correct, so start a new session
                            session_start();                    
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            if($admin == 1){     
                                $_SESSION["adminpriv"] = true;
                            }
                            else{
                                $_SESSION["adminpriv"] = false;
                            }                               
                            // Redirect user to welcome page
                            header("location: home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                            ?>
                            <script>alert('User Name or Password is Incorrect');</script>
                            <?php
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                    ?>
                    <script>alert('User Name or Password is Incorrect');</script>
                    <?php
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                ?>
                <script>alert('"Oops! Something went wrong. Please try again later."');</script>
                <?php
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>Narrows GP</title>
        <link rel="stylesheet" href ="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=STIX+Two+Text&display=swap" rel="stylesheet">
        <link rel="icon" type="image/ico" href="logo.ico"/>
    </head>
    <body style="background-color:black;">
        <div class="container">
            <div class="Title-Left">
                <h1>Narrows</h1>
            </div>
            <div class="Title-Right">
                <h1>Racing</h1>
            </div>
            <div class="Logo">
                <img src="logo.png">
            </div>
            
            <div class="Navbar">
                <a href="Home.php">Home</a>
                <a href="Gallery.php">Gallery</a>
                <a href="Careers.php">Careers</a>
                <a href="general.php">Bulletin Board</a>
                <a href="Contacts.php">Contacts</a>
                <a href="register.php">Register</a>
            </div>
            <div class="Arrow-Right">
                <div class="arrow">
                    <div class="line"></div>
                    <div class="point"></div>
                </div>
            </div>
            <div class="Arrow-Left">
                <div class="arrowL">
                    <div class="lineL"></div>
                    <div class="pointL"></div>
                </div>
            </div>
            <div class="Article">
                <h2>Please Log-In</h2>
                <form id="LogInForm" name="LogInForm" method="post" action="">  
                    <div class="Username"><input name="Username" type="text" required="required" class="textfield" id="Username" placeholder="Username"></div>
                    <div class="Password"><input name="Password" type="password" required="required" class="textfield" id="password" placeholder="Password"></div>
                    <div class="Login"><input name="LogIn" type="submit" class="button" id="LogIn" value="Log In"></div>    
                </form> 
                <h5>Dont have a account?</h5>
                <div class="link">
                    <h5>Create one <a href="register.php">here!</a></h5>
                </div>
            </div>
            <div class="Footer">
                <p>Narrows GP Racing - 2021</p>
            </div>
        </div>
    </body>
</html>

