<?php
session_start();
  if(isset($_POST['changePass']))
  {
    header("Location:http://localhost/PICA%20Quiz/php/change_pass_std.php");
  }

if(isset($_POST['update-details']))
{
  $_SESSION['Email'] = $_POST['email'];
  $_SESSION['PNumber'] = $_POST['phone_no'];

  include 'database_connect.php';

  $SQL = "UPDATE student_table SET email = '{$_SESSION['Email']}', phone_no='{$_SESSION['PNumber']}' WHERE enroll_no = '{$_SESSION['Enrollment']}' ";
  $result = mysqli_query($conn, $SQL) or die("Query Unsuccessful");

  header("Location:http://localhost/PICA%20Quiz/student%20side/student_account.php");
}

?>
