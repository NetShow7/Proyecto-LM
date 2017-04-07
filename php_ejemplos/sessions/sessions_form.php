
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Insert your data:</h2>
    <form action="sessions_users_query.php" method="post">
      <table>
				<tr><td>
					User ID:<br>
					Password:</td>

					<td>
						<td><input type="text" name="id"><br>
							<input type="password" name="pw"><br>
						</tr>
					</td>
				</tr>
			</table>
      <input type="submit">
      <?php
        session_start();
        if (isset($_GET["mal"])) {
          printf("<br><br>Datuak txarto sartu dituzu!<br><img src=\"stop.jpg\">");
        }elseif (isset($_SESSION["usuario"])) {
          printf("<br><br>Kaixo ".session_name());

       ?>
       <br>
       <br>
       <a href="Close_session.php">Close session</a>
       <?php } ?>

    </form>
  </body>
</html>
