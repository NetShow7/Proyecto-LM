<?php
	include("connect.php");
		$link=connectSkydancer();
		$path = '../img/flightpics'; 							# Karpeta sortu "Argazkiak", honen barruan beste bat "DB".
		$tmp = 	$_FILES['pic']['tmp_name']; 				# Argazkiaren helbidea:
		$name = 		$_FILES['pic']['name']; 					# Argazki izena:
		$Fpath = $path.'/'.$name; 	# Bukaerako helbidearen helbidea gorde.
		move_uploaded_file($tmp,$Fpath); 			# Argazkiaren kopia bat egin "Argazkiak/DB" karpetan.



    $query= "(".$_POST['dur'].",'".$_POST['ori']."','".$_POST['des']."','".$_POST['p1']."','".$_POST['p2']."',".$_POST['tic'].",".$_POST['tics'];
		mysqli_query($link,"insert into flights(duration, origin, destination, pilot1, pilot2, tickets, tickets_sold, fdate, price, photo) values  ".$query.",'".$_POST['dat']."',".$_POST['prc'].",'$Fpath')");

		mysqli_close($link);
		header("Location: ..\index.php");
		?>
