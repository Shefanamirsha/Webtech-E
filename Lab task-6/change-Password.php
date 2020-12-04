<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="lightcyan">

<form action="welcome.php" method="post">
  
  <table align="center">
    <tr>
      <th colspan="2"><h2>Change Password </h2></th>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="semail" required pattern="[a-zA-Z0-9]+@[a-z0-9.-]+\.[a-z]{2,5}$"></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input type="password" name="spass" required ></td>
    </tr>

  </table>
  <br>
<center>
      <input type="submit" name="update" value="update">
    <input type="submit" name="reset" value="reset">
    <input type="button" onclick="window.location='Dashboard.php'" class="Redirect" value="Back"/>
    <input type="button" onclick="window.location='Public Home.php'" class="Redirect" value="Logout"/>
</center>

  
</form>

</body>
</html>