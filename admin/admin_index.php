<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	echo date("D/d/H:i:s/A"); 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../css/main.css">
<title>Welcome to your admin panel</title>
</head>
<body>
	<?php echo $_SESSION['user_name'];  ?>
</body>
</html>