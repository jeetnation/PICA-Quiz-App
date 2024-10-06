<?php
//get form details....
 $f_name = strtoupper($_POST['first_name']);
 $l_name = strtoupper($_POST['last_name']);
 $enrollment = $_POST['enrollment'];
 $course = $_POST['course'];
 $semester = $_POST['semester'];
 $email_id = $_POST['email'];
 $phone_no = $_POST['phone_no'];
 $password1234 = $_POST['student_password'];

//Connect Database...
include 'database_connect.php';

 //Insert Records...
 $SQL = "INSERT INTO student_table (enroll_no, f_name, l_name, email, course, semester, phone_no, password) VALUES ('{$enrollment}', '{$f_name}', '{$l_name}', '{$email_id}', '{$course}', '{$semester}', '{$phone_no}', '{$password1234}') ";


$result = mysqli_query($conn, $SQL) or die("Query Unsuccessful");

header("Location:http://localhost/PICA%20Quiz/Welcome%20page/Welcome_homepage.php");


mysqli_close($conn);
?>
