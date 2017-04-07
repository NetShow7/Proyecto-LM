<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include("test_connect_db.php");
	$link=DBconnect2();

	$chassis=$_POST["chassis"];
	var $x;
	if ($x = search($chassis)) {
		echo "bien";
	}else {
		echo "mal";
	}
	?>
</body>
</html>
