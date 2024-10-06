<html>

<head>
</head>

<body>
  <?php include 'student_header.php';?>
  <center>
    <table>
<form action="http://localhost/PICA%20Quiz/php/update_student_details.php" method="post">
  <tr>
<td>Enrollment No:</td>
<td> <input type="text" name="s_id" value="<?php echo $_SESSION['Enrollment'];?>" readonly/> </td>
</tr>
<tr>
<td>First Name:</td>
<td> <input type="text" name="first_name" value="<?php echo $_SESSION['first_name']?>" readonly/> </td>
</tr>
<tr>
<td>Last Name:</td>
<td> <input type="text" name="last_name" value="<?php echo $_SESSION['last_name'];?>" readonly/> </td>
</tr>
<tr>
  <td>Email id:</td>
  <td><input type="text" name="email" value="<?php echo $_SESSION['Email']; ?>"/></td>
</tr>
<tr>
  <td>Course:</td>
  <td><input type="text" name="course" value="<?php echo $_SESSION['Course']; ?>" readonly/></td>
</tr>
<tr>
  <td>Semester:</td>
  <td><input type="text" name="Semester" value="<?php echo $_SESSION['Sem']; ?>" readonly/></td>
</tr>
<tr>
  <td>Phone Number:</td>
  <td><input type="number" name="phone_no" value="<?php echo $_SESSION['PNumber']; ?>"/></td>
</tr>
<tr>
<td>Password:</td>
<td> <input type="password" value="<?php echo $_SESSION['Password']; ?>" readonly/> <input type="submit" name="changePass" value="CHANGE PASSWORD" /> </td>
</tr>
<tr>
<td><input type="submit" name="update-details" value="Save Details"></td>
</tr>
</form>
</table>
</center>
</body>

</html>
