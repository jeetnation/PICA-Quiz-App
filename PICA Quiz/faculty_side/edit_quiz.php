<?php
include 'faculty_header.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "pica_quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

$SQL = "SELECT DISTINCT(subject_name) FROM quiz_table";
$result = mysqli_query($conn, $SQL) or die("not possible");
?>
<center>
<form action="" method="post">
  <select name="subjects">
  <?php
  while($row = mysqli_fetch_assoc($result))
  {
      $subject_name = $row['subject_name'];
      echo "<option value='$subject_name' required>$subject_name</option><br/>";
  }
?>
</select>
<input type="submit" name="submit" value="DELETE QUIZ"/>
</form>
</center>
<?php
if(isset($_POST['submit'])){
  $Sql = "DELETE FROM quiz_table WHERE subject_name = '{$_POST['subjects']}'";
  $Result = mysqli_query($conn, $Sql) or die("Not");
}
 ?>
