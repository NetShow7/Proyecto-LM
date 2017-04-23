<?php
	include("connect.php");
		$link=connectSkydancer();
    $query= "(".$_POST['id'].",".$_POST['dur'].",'".$_POST['ori']."','".$_POST['des']."','".$_POST['p1']."','".$_POST['p2']."',".$_POST['tic'].",".$_POST['tics'];
		mysqli_query($link,"insert into flights values ".$query.",'".$_POST['dat']."',".$_POST['prc'].")");

		mysqli_close($link);
		header("Location: ..\index.php");
		?>
