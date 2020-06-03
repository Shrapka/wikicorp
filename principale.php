<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            
            <a href='principale.php?Logout=true'><span>Logout</span></a>
            
            <?php
                session_start();
                if(isset($_GET['Logout']))
                { 
                   if($_GET['Logout']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if(isset($_SESSION['username'])&&$_SESSION['username']!== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
            
        </div>
    </body>
</html>