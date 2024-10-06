<html>
<head>
</head>
<body>
  <center>
  <h1> Change Password</h1>
  <form method="post" action="http://localhost/PICA%20Quiz/php/change_password.php">
    Current Password:<input type="password" name="old" required/><br/>
    New Password: <input type="password" name="new" required/><br/>
    <input type="submit" name="update-pass" value="CHANGE PASSWORD"/>
  </form>
</center>
</body>
</html>

<?php
if(isset($_POST['update-pass']))
{
session_start();
$old_pass = $_POST['old'];
$new_pass = $_POST['new'];
echo $_SESSION['password'];
if($old_pass == $_SESSION['password'])
{
    include 'database_connect.php';
    $SQL = "UPDATE faculty_table SET password ='{$new_pass}' WHERE faculty_id='{$_SESSION['faculty_id']}'";
    $result = mysqli_query($conn, $SQL) or die("Query Unsuccessful");

    $_SESSION['password'] = $new_pass;

    header("Location:http://localhost/PICA%20Quiz/faculty_side/my_acount_page.php");
}
else
{
  echo "Enter the correct password";
}
}
 ?>
