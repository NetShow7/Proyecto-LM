<?php
  session_start();
  session_destroy();
  echo "You've closed your session";
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="sessions_form.php"><b>Create new session</b></a>
  </body>
</html>
