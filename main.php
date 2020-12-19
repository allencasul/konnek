<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A private social app | Konnek 2020-21">
    <meta name="keywords" content="Konnek | Online Sharing | Social Network | Social Media Platform">
    <meta name="author" content="Casul Allen Charls">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konnek | Social Network</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="konnek-main-icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div id="logo" class="logo"><a class="rm" href="main.php">
                KONNEK <?php
                include "postock-database.php";
                include "count.php";
                ?>
            </a></div>
            <div class="try">
                <a class="sel" href="index.php">Log out</a>
            </div>
            <div id="menu" class="menu">
              <i id="bar" class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="flex2">
              <div class="main2">
                <div class="open-menu">
                  <div class="content2">
                    <div class="plus2"><p class="rotate">+</p></div>
                    <div class="settings">
                      <div><a class="option" href="main.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go back</a><a class="option" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></div><br><br><br>
                      <div><a class="chat" href="konnek-global-chat.php"></i><i class="fa fa-commenting-o" aria-hidden="true"></i> Join Global Chat</a></div><br><br><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </nav>
    </header>
    <div>
      <style type="text/css">
        
        .flex2
        {
          display: none;
        }

        .main-footer
        {
          color: gray;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .content2
        {
            margin-top: 20%;
            background: white;
            height: 600px;
            width: 360px;
            margin-top: -31px;
    
        }

        .chat
        {
          text-decoration: none;
          border: 1px solid #74AEC5;
          font-size: 18px;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          padding: 14px 29px;
          color: #74AEC5;
          font-weight: bold;
          border-radius: 50px;

        }

        .chat:hover
        {
          background: #74AEC5;
          color: #ffffff;
          border: none;
          outline: none;
          cursor: pointer;
          transition: .2s;
        }

        .settings
        {
          text-align: center;
          margin: auto;

        }

        .option
        {
          text-decoration: none;
          font-size: 14px;
          color: white;
          font-family: sans-serif;
          background: #74AEC5;
          padding: 10px 22px;
        }

        .plus2
        {
          font-size: 45px;
          color: white;
          transform: rotate(45deg);
        }
        
      </style>

    <div class="scroll-top-section">
       <a href="#"><i id="scroll-top" class="fa fa-chevron-up" aria-hidden="true"></i></a>
    </div>
    <div class="upload"><i id="post" style='font-size:24px' class='fas'>&#xf234;<p class="create">Create Post</p></i></div>
    <div class="flex">
        <div class="main">
            <div class="create-post">
               <div class="plus">+</div>
                   <div class="content">
                   <form action="postock-function-display.php" method="post" enctype="multipart/form-data">
                       <textarea name="text" class="text" id="text" placeholder="Create a post..." autocomplete="off"></textarea>
                           <div class="move">
                            <button id="click" name="submit" class="btn" type="submit">
                                <i id="pass" style="font-size:50px" class="fa">&#xf1d9;</i>
                           </button>
                        </div>
                       <input id="image" name="image" class="file" type="file">
                   </form>
               </div>
           </div>
       </div>
    </div><br><br><br><br>
    <div id="stage"><?php include 'postock-function-display.php'; ?></div>
    <script src="main.js"></script>
    <div class="main-footer">Developed by: Casul Allen Charls <br><br> &copy; Konnek 2020-21</div>
</body>
</html>
