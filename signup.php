<?php
include 'postock-database.php';

if(isset($_POST['signup']))
{
    $name = htmlentities(mysqli_real_escape_string($con, $_POST['name']));
    $username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
    $date = date("Y-m-d H:i:s");

    if(empty($name) || empty($username) || empty($password))
    {
        echo "<p class='alert'>Oops!, you forgot something.</p>";
    }
    else
    {
        $sql = "INSERT INTO user_system (user_bigname, user_username, user_pass, date_sent) VALUES ('$name','$username','$password', '$date')";
        $result = mysqli_query($con, $sql) or die($con->error);
        echo "<script>alert('Congratulations!, Sign in now.')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }


}
?>
<style>
    .alert
    {
        color: red;
        font-size: 20px;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 100px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A private social app | Konnek 2020-21">
    <meta name="keywords" content="Konnek | Online Sharing | Social Network | Social Media Platform">
    <meta name="author" content="Casul Allen Charls">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konnek | Social Network</title>
    <link rel="icon" href="icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div id="logo" class="logo"><a class="rm" href="index.php">
                KONNEK
            </a></div>
            <div class="menu"><i id="bar" class="fa fa-bars" aria-hidden="true"></i></div>
        </nav>
    </header>
<div class="this3">
    <div class="main-form3">
        <form action="signup.php" method="post">
            <input class="forname" type="text" name="name" placeholder="Name" autocomplete="off"><hr>
            <input class="forusername2" type="text" name="username" placeholder="Username" autocomplete="off"><hr>
            <input class="forpassword2" type="password" name="password" placeholder="Password" autocomplete="off"><hr>
            <!-- <div class='main-check'>
                <input class='check' type="checkbox" required>
            </div> -->
            <div class="submit-section">
                <button class="submit" type="submit" name="signup">Sign Up</button>
            </div>
            <p class="p">Already have an account? <a class="a" href="index.php">Click Here</a></p>
        </form>
    </div>
    <br><br>
    <div class="translate">
    <p class='footer'>Developed by: Charls Allen Casul <br><br> Konnek &copy; 2020-21 </p>
</div>
</div>
</body>
</html>

