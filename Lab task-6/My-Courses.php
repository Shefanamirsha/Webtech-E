<?php 

session_start();

if (isset($_SESSION['cname'])) {
	echo "<h1>Welcome ". $_SESSION['cname']." to course page</h1>";
	echo "<a href ='view.php'> back to view page</a><br>";
	echo "<a href ='logout.php'> logout</a>";

}

else{
		echo "<script>location.href='login.php'</script>";
}

 ?>