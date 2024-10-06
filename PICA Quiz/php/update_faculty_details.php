<?php
session_start();
  if(isset($_POST['changePass']))
  {
    header("Location:http://localhost/PICA%20Quiz/php/change_password.php");
  }

if(isset($_POST['update-details']))
{
  $f_id = $_POST['f_id'];
  $first = $_POST['first_name'];
  $last = $_POST['last_name'];
  $email_id = $_POST['email'];
  $phone = $_POST['phone_number'];


  include 'database_connect.php';

  $SQL = "UPDATE faculty_table SET faculty_id = '{$f_id}', f_name ='{$first}', l_name ='{$last}', email='{$email_id}', phone_no='{$phone}' WHERE faculty_id='{$_SESSION['faculty_id']}' ";
  $result = mysqli_query($conn, $SQL) or die("Query Unsuccessful");

  $_SESSION['faculty_id'] = $f_id;
  $_SESSION['f_name'] = $first;
  $_SESSION['l_name'] = $last;
  $_SESSION['email'] = $email_id;
  $_SESSION['phone_no'] = $phone;

  header("Location:http://localhost/PICA%20Quiz/faculty_side/my_acount_page.php");
}

?>
