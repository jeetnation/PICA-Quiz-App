<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pica_quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");
?>

<html>
<head>
</head>
<body>
  <?php include 'faculty_header.php';?>
  <center>
    <table>
<form action="http://localhost/PICA%20Quiz/php/update_faculty_details.php" method="post">
  <tr>
<td>Faculty ID:</td>
<td> <input type="text" name="s_id" value="<?php echo $_SESSION['faculty_id'] ?>"/> </td>
</tr>
<tr>
<td>First Name:</td>
<td> <input type="text" name="first_name" value="<?php echo $_SESSION['f_name'] ?>"/> </td>
</tr>
<tr>
<td>Last Name:</td>
<td> <input type="text" name="last_name" value="<?php echo $_SESSION['l_name']; ?>"/> </td>
</tr>
<tr>
<td>Email ID:</td>
<td> <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/> </td>
</tr>
<tr>
<td>Phone Number:</td>
<td> <input type="number" name="phone_number" value="<?php echo $_SESSION['phone_no']; ?>"/> </td>
</tr>
<tr>
<td>Password:</td>
<td> <input type="password" value="<?php echo $_SESSION['password']; ?>" readonly/> <input type="submit" name="changePass" value="CHANGE PASSWORD" /> </td>
</tr>
<tr>
<td><input type="submit" name="update-details" value="Save Details"></td>
</tr>
</form>
</table>
</center>
</body>
</html>
