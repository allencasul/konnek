<style>

    .alert
    {
        color: gray;
        font-size: 17px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding-left: 15px;
    }

    @media only screen and (max-width: 1920px)
    {
        .photo
        {
            margin-left: 29.5%;
            margin-top: -1px;       
        }

        img
        {
            width: 502px;
            background: white;
            border: 1px solid lightgray;
            padding: 20px 19px;
            border-radius: 0px 0px 5px 5px;
        }

        .main-div
        {   
            background: white;
            padding: 30px 10px;
            height: fit-content;
            width: 520px;
            margin-left: 29.5%;
            border: 1px solid lightgray;
            margin-top: 2px;
            border-radius:5px 5px 0px 0px;
        }  
        .main-post
        {
            background: white;
            width: 400px;
            padding: 15px 50px 15px;
            height: fit-content;
            margin-left: 1.5%;
            border: 1px solid lightgray;
            margin-top: 1%;
        }
        .user-post
        {
            color: darkgray;
            font-size: 16.5px;
            font-family: 'Antic', sans-serif;
            letter-spacing: 0.4px;
        }
        .date-posted
        {
            font-family: 'Play', sans-serif;
            color: #c2c2c2;
            margin-left: 2%;
            font-size: 14px;
        }
        #edit
        {
            color: #c9c9c9;
            font-size: 20px;
            margin-left: 95%;
            margin-top: -5px;
            cursor: pointer;
        }
        #edit:hover 
        {
            color: darkgray;
            transition: .3s;
            font-size: 20px;
        }
    }

    @media only screen and (max-width: 768px)
    {
        .photo
        {
            margin-left: 100px;
        }
        .main-div 
        {
            margin-left: 100px;
        }
        
    }
    @media only screen and (max-width: 540px)
    {
        .photo
        {
            margin-left: 0px;
        }
        .main-div 
        {
            margin-left: 0px;
        }
                .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 475px)
    {
        .photo
        {
            margin-left: 0%;
            margin-top: -1px;          
        }

        img
        {
            width: 302px;
            background: white;
            border: 1px solid lightgray;
            padding: 35px 19px;
            border-radius: 0px 0px 5px 5px;
        }
        .main-div
        {   
            background: white;
            padding: 35px 10px;
            height: fit-content;
            width: 320px;
            margin-left: 0%;
            border: 1px solid lightgray;
            margin-top: 2px;
            border-radius: 5px 5px 0px 0px;
        }    
        .main-post
        {
            background: white;
            width: 265px;
            padding: 15px 20px 15px;
            height: fit-content;
            margin-left: 1.5%;
            border: 1px solid lightgray;
            margin-top: 2%;           
        }
        .user-post
        {
            color: darkgray;
            font-size: 16.5px;
            font-family: 'Antic', sans-serif;
            letter-spacing: 0.5px;          
        }      
        .date-posted
        {
            font-family: 'Play', sans-serif;
            color: lightgray;
            margin-top: 5px;
            margin: 2px;
            font-size: 12px;
        }
        #edit
        {
            color: #c9c9c9;
            font-size: 20px;
            margin-left: 93%;
            margin-top: -5px;
            cursor: pointer;
        }
        #edit:hover 
        {
            color: darkgray;
            transition: .3s;
            font-size: 20px;
        }
        .comment-section
        {
            margin-top: -14%;
            margin-left: 58%;
        }
        .comment
        {
            color: darkgray;
            text-decoration: none;
            font-family: 'Antic', sans-serif;
            border: 1px solid lightgray;
            padding: 11px 30.5px;
        }
        .comment:hover 
        {
            color: gray;
            transition: .1s;
            border: 1px solid darkgray;
        }
        .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 414px)
    {
        .photo
        {
            margin-left: 27px;
        }
        .main-div 
        {
            margin-left: 27px;
        }
        .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 411px)
    {
        .photo
        {
            margin-left: 25px;
        }
        .main-div 
        {
            margin-left: 25px;
        }
        .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 375px)
    {
        .photo
        {
            margin-left: 7px;
        }
        .main-div 
        {
            margin-left: 7px;
        }
        .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 360px)
    {
        .photo
        {
            margin-left: 0px;
        }
        .main-div 
        {
            margin-left: 0px;
        }

        .date-posted
        {
            padding: 10px;
            margin-left: -4px;
        }
    }
    @media only screen and (max-width: 320px)
    {
        .photo
        {
            margin-left: -7px;
        }
        .main-div 
        {
            margin-left: -7px;
        }
    }
</style>
<?php
include 'postock-database.php';
//POST
if(isset($_POST['submit']))
{
    $userPost = htmlentities(mysqli_real_escape_string($con, $_POST['text']));
    $date = date("Y-m-d H:i:s");
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  

    if(empty($userPost) || empty($file))
    {
          echo "<script>alert('Please put some descriptions about your photo!')</script>";
          echo "<script>window.open('main.php', '_self')</script>";
    }
    else
    {
        $sql = "INSERT INTO postock_container (user_post, date_sent, name) VALUES ('$userPost','$date','$file')";
        $result = mysqli_query($con, $sql) or die($con->error);
        echo "<script>window.open('main.php', '_self')</script>";
    }
}
    $sql = "SELECT * FROM postock_container ORDER BY id DESC";
    $result = mysqli_query($con, $sql) or die($con->error);
    $result->num_rows;
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_array())
        {
            echo "<div class='main-div'><i id='edit' class='fa fa-ellipsis-h' aria-hidden='true'></i><div class='main-post'>" . "<p class='user-post'>" .$row['user_post']. "</p>" . "</div>" . "<div>"  . "<p class='date-posted'>" .$row['date_sent'] . "</div></div>" . '<div class="photo"><img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).' "class="img-thumnail" /></div>';
        }
    }
    else 
    {
        echo "<p class='alert'>Temporarily no post for now!.  :)</p>";
    }
?>

