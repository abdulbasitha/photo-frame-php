
<?php
session_start();
if(isset($_SESSTION['loc'])){
    echo $_SESSION['loc'];
}


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Xtrinia 2.0 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" async="async" />
  </head>
  <body>
    <div id="wrapper">
      <div id="content">
        <h1><a href="https://xtrinia.ieeemeasb.org/">Xtrinia 2.0 | Profile Frame Creator</a></h1>
<!--        <p>Make this as your profile picture to Xtrinia</p>-->
        <?php
        $url = $_SESSION['loc'];
        if(isset($_SESSION['loc']))
          echo "<a href='". $url ."' download='xtrinia-profile'><img src='". $url ."' /></a>";
        else
          header("Redirect: index.php");
        ?>
        <p>
        Click the above image to download.<br/>Or right click (in mobile, hold down) and choose "Save Image"
        </p>
        <p>
          <a href="index.php"><button id="download">Create Another Profile Picture!</button></a>
        </p>

      </div>
    </div>
  </body>
</html>
