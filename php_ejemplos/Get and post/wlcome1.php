
	<?php 

	if ($_POST["pwd"]!=null) {
		if ($_POST["pwd"] != $_POST["name"]) {
	# code...

			echo"<h1>Formularioko datuak</h1><br><br>".
			"You are ".$_POST["name"]." ".$_POST["surname"]." and your password is ".$_POST["pwd"];
		}else{
			echo "Your password can't be the same as your name";

		}
	}else{
		echo "Your password can't be empty"; }?>



