<?php 

	session_start();

		if(isset($_SESSION['user'])){

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <a href="../controller/logout.php">sai da qui vala</a>
</body>
</html>
<?php 

	}else{
		header("location: index.php?access=login_denied");
	}

 ?>