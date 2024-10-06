<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "pica_quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

$sql = "INSERT INTO result_table (student_enrolment, student_name, subject_name, student_marks) VALUES ('{$_SESSION['Enrollment']}', '{$_SESSION['first_name']}', '{$_SESSION['sub_name']}', '{$_SESSION['result']}')";
$RESULT = mysqli_query($conn, $sql) or die("not possible");

echo "<h1>Your Result is ".$_SESSION['result']."</h1>";
echo "<br/><br/><br/><br/>";
echo "<h1>The top three in ".$_SESSION['sub_name']." are</h1>";

$SQL = "SELECT student_name,student_marks FROM result_table WHERE subject_name ='{$_SESSION['sub_name']}' ORDER BY student_marks LIMIT 3";
$result = mysqli_query($conn, $SQL) or die("Not");
?>
<table>
  <tr>
    <th>Student Name</th>
    <th>Student Marks</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result)){?>
    <tr>
      <td><?php echo $row['student_name'] ?> </td>
      <td><?php echo $row['student_marks']?> </td>
    </tr>
  <?php } ?>
</table>
<form action="resultstudent.php" method="post">
<input type="submit" name="sub" value="OK"/>
</form>

<?php
if(isset($_POST['sub'])){
  header("Location:http://localhost/PICA%20Quiz/student%20side/student_home.php")
}
 ?>
