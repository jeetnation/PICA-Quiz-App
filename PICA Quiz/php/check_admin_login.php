<?php
if(isset($_POST['a_login']))
{
    include 'database_connect.php';

    $a_id = $_POST['a_id'];
    $admin_pass = $_POST['a_pass'];

    $sql = "SELECT * FROM admin_table WHERE  admin_id = '{$a_id}' AND password = '{$admin_pass}'";

    $result = mysqli_query($conn, $sql) or die("query failed");

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result))
      {
        session_start();
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['first_name'] = $row['f_name'];
        $_SESSION['last_name'] = $row['l_name'];
        $_SESSION['Password'] = $row['password'];
        header('Location:http://localhost/PICA%20Quiz/Admin%20Side/Admin_home.php');
      }
    }
    else
    {
      echo 'NOT Matched';
    }

}

 ?>
