<html>

<head>
</head>

<body>
  <?php include 'admin_header.php';?>
  <center>
    <table>
<form action="http://localhost/PICA%20Quiz/php/update_faculty_details.php" method="post">
  <tr>
<td>Admin ID:</td>
<td> <input type="text" name="a_id" value="<?php echo $_SESSION['admin_id']; ?>"/> </td>
</tr>
<tr>
<td>First Name:</td>
<td> <input type="text" name="first_name" value="<?php echo $_SESSION['first_name'] ?>"/> </td>
</tr>
<tr>
<td>Last Name:</td>
<td> <input type="text" name="last_name" value="<?php echo $_SESSION['last_name']; ?>"/> </td>
</tr>
<tr>
<td>Password:</td>
<td> <input type="password" value="<?php echo $_SESSION['Password']; ?>" readonly/>
</tr>
</form>
</table>
</center>
</body>

</html>
