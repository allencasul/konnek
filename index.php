<?php
include 'postock-database.php';

if(isset($_POST['signin']))
{
    $username = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
    $password = htmlentities(mysqli_real_escape_string($con, $_POST['password']));
    $date = date("Y-m-d H:i:s");
     
    if(empty($username) || empty($password))
    {
        echo "<div class='main-empty'><p class='empty'>Please Enter Username and Password!</p></div>";
    }
    else
    {
        $sql = "SELECT * FROM user_system WHERE user_username = '$username' AND user_pass = '$password'";
        $result = mysqli_query($con, $sql) or die($con->error);
         $total = $result->num_rows;
        if($total > 0)
        {
            echo "<script>alert('Welcome Home :)')</script>";
            echo "<script>window.open('main.php', '_self')</script>";
        }
        else
        {
             echo "<div class='main-empty'><p class='empty'>No account found!, Click Sign Up.</p></div>";
        }
    }
}
?>
<style type="text/css">
    .empty
    {
        padding: 0px 0px 0px;
        text-align: center;
        font-family: 'Play', sans-serif;
        color: red;
        font-size: 17px;
    }

    .main-empty
    {
        margin-top: 90px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A private social app | Konnek 2020-21">
    <meta name="keywords" content="Online Sharing | Social Network | Social Media Platform">
    <meta name="author" content="Casul Allen Charls">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konnek | Social Network</title>     
    <link rel="icon" href="konnek-main-icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Just+Me+Again+Down+Here&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="menu"><i id="bar" class="fa fa-bars" aria-hidden="true"></i></div>
            <a class="mr" href="index.php"><img class='image' src="konnek-main-icon.png" alt="logo"></a>
           <div class='brand'><a class="logo" href="index.php">KONNEK</a></div>
        </nav>
    </div>
    </header>
    <div class='heading'>
        <p class='this-heading'>Konnek anywhere.</p>
        <p class='btm'>A great place to share your photos...</p>
        <div class='more'>
            <a class='remo' href="https://bit.ly/36QSUWU">View More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="miraluna-icon">
        <img class="icon" src="miraluna-icon.png">
    </div>
    <div class='side'>
    <div class="this">
    <div class='main-heading'>
        <div id="logo" class="logo"><a class="rm" href="index.php"><img src="konnek-main-icon.png" alt="logo"></a></div><br>
        <span>A photo sharing platform which <br> connects people.</span>
    </div>
    <div class="main-form">
        <form action="index.php" method="post">
            <i id='icon' class="fa fa-user-o" aria-hidden="true"></i>
            <input class="username" type="text" name="username" placeholder="Username" autocomplete="off">
            <hr class="hr">
            <i id=icon class="fa fa-key" aria-hidden="true"></i>
            <input class="password" type="password" name="password" placeholder="Password" autocomplete="off">
            <hr class="hr">
            <div class="submit-section">
                <button class="submit" type="submit" name="signin">Sign In</button>
            </div>
            <p class="p">Don't have an account? <a class="a" href="signup.php">Sign Up</a></p>
        </form>
    </div>
    </div>
    </div><br>
<br><br>
<center><div class="fb-comments" data-href="https://konnek-app.000webhostapp.com" data-numposts="5" data-width=""></div></center><br><br>
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="scgVocT9"></script>
<div class="translate">
<p class='footer'>Developed by: Charls Allen Casul <br><br> Konnek &copy; 2020-21 </p>
</div><br><br>
</html>

