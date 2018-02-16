<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	echo "The Date is: "; echo date("D/d"); echo "Th"; echo date("/H:i:s/A");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../admin/css/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
<title>Welcome to your admin panel</title>
</head>
<body class="adminpage">
	<section class="adminpage1">
	<?php echo "Hello "; echo $_SESSION['user_name'];  ?>
</section>
<section class="lastlogin">
<?php echo "The last login was at: "; echo $_SESSION['last_login'];
?>
</section>
</body>
</html>
