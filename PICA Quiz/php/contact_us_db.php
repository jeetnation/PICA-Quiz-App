<?php
require 'database_connect.php';

if(isset($_POST['submit']))
{
    $Mail = $_POST['email_id'];
    $Name = strtoupper($_POST['full_name']);
    $Message = $_POST['Mess'];

    $SQL = "INSERT INTO feedback_table (feed_name, feed_email, feed_message) VALUES ('{$Name}','{$Mail}','{$Message}')";

    $result = mysqli_query($conn, $SQL) or die("Query Unsuccessful");

    header("Location:http://localhost/PICA%20Quiz/Welcome%20page/contact_us.php");

    mysqli_close($conn);
}
?>
