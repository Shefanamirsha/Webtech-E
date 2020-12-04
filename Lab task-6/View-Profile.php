
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

<form action="welcome.php" method="post">

</div>
  <p align="center"><img src="me.jpg" alt="me" style="width:128px;height:128px;"></p>
  <table align="center">
    <tr>
      <th colspan="2"><h2> View Profile</h2></th>
    </tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="sname" required pattern="[a-zA-Z]{3,15}$" ></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="semail required pattern="required pattern="[a-zA-Z0-9]+@[a-z0-9.-]+\.[a-z]{2,5}$"></td>
    </tr>
    <tr>
      <td>Occupation</td>
      <td><input type="occupation" name="soccupation"></td>
    </tr>

    <tr>
    <td align="right" colspan="2"><input type="button" onclick="window.location='Dashboard.php'" class="Redirect" value="Back"/></td>
    </tr>
    <tr>
    <td align="right" colspan="2"><input type="button" onclick="window.location='Public Home.php'" class="Redirect" value="Logout"/></td>
  </tr>


    </tr>
  </table>
  
</form>

</body>
</html>