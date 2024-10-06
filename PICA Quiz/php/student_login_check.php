<?php
include "database_connect.php";

if(isset($_POST['login']))
{
$enrollment = $_POST['enroll'];
$password = $_POST['pass'];

$sql = "SELECT * FROM student_table WHERE enroll_no = '{$enrollment}' AND password = '{$password}'";

$result = mysqli_query($conn, $sql) or die("query failed");

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['Enrollment'] = $row['enroll_no'];
    $_SESSION['first_name'] = $row['f_name'];
    $_SESSION['last_name'] = $row['l_name'];
    $_SESSION['Email'] = $row['email'];
    $_SESSION['Course'] = $row['course'];
    $_SESSION['Sem'] = $row['semester'];
    $_SESSION['PNumber'] = $row['phone_no'];
    $_SESSION['Password'] = $row['password'];
    header('Location:http://localhost/PICA%20Quiz/student%20side/student_home.php');
  }
}
else{
  echo 'NOT Matched';
}

}
 ?>
