<!DOCTYPE html>
<html>
<head>

<style>
/* This style sets the width of all images to 100%: */
img {
  width: 100%;
}
</style>
	<title></title>
</head>
<body bgcolor="lightcyan">


<form action="connection.php" method="post">

</div>
	<p align="center">
			
		</tr><img src="registration.jpg" alt="registration" style="width:260px;height:180px;"></p>
	<table align="center">
		<tr>
			<th colspan="2"><h2> Student Registration</h2></th>
		</tr>
		
	
		<tr>
			<td>Name</td>
			<td><input type="text" name="sname" required pattern="[a-zA-Z]{3,15}$" ></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="semail" required pattern="[a-zA-Z0-9]+@[a-z0-9.-]+\.[a-z]{2,5}$">
			</td>
		</tr>
		    <tr>
      <td>Password</td>
      <td><input type="password" name="spass" required></td>
     </tr>
		<tr>
			<td>Occupation</td>
			<td><input type="occupation" name="soccupation"></td>
		</tr>
		<form action="upload.php" method="post" enctype="multipart/form-data">
         <tr>
			<td>Upload Image</td>
			<td align="right" colspan="2"><input type="file" name=" file" value="choose file"> </td>
		</tr>
		<tr>
			<td align="middle" colspan="2"><input type="submit" name="submit" value="send"></td>
		</tr>
		</form>
	</table>

	<center>
		
		 <input type="button" onclick="window.location='Public Home.php'" class="Redirect" value="Back"/> 
		<input type="button" onclick="window.location='Student Login.php'" class="Redirect" value="Login"/>

	</center>

</form>

</body>
</html>