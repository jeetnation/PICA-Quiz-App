<?php
include "database_connect.php";

if(isset($_POST['faculty_login']))
{
$id = $_POST['faculty_id'];
$pass = $_POST['faculty_pass'];

$sql = "SELECT * FROM faculty_table WHERE faculty_id='{$id}' AND password='{$pass}'";

$result = mysqli_query($conn, $sql) or die("query failed");

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['faculty_id'] = $row['faculty_id'];
    $_SESSION['f_name'] = $row['f_name'];
    $_SESSION['l_name'] = $row['l_name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['phone_no'] = $row['phone_no'];
    $_SESSION['password'] = $row['password'];
    header('Location:http://localhost/PICA%20Quiz/faculty_side/select_subject.php');
  }
}
else{
  echo 'NOT Matched';
}

}
?>
