	<?php
      $connect = mysqli_connect("localhost","root","","student");
	  if(!$connect){
		  echo("Error connection:".mysqli_connect_error());
	  }
	  if(isset($_POST['submit'])){
		  $sname  = $_POST['sname'];
		  $semail  = $_POST['semail'];	 
		  $spass  = $_POST['spass'];
		   $spass = md5($spass);
		  $soccupation  = $_POST['soccupation'];
		 
		  
	$sql = "insert into register(ID,Name,Email,Password,Occupation)
	values('', '$sname', '$semail', '$spass','$soccupation')";
	$result = mysqli_query($connect,$sql);
	
	   if($result){
		   echo"Thanks For your Registration";
	   }
	   else{
		   echo"Please Try again";
	   }
	  }
	?>