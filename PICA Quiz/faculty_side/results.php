<?php
include 'faculty_header.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "pica_quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

$SQL = "SELECT subject_name, student_name, student_marks FROM result_table GROUP BY subject_name ORDER by student_marks";
$result = mysqli_query($conn, $SQL) or die("Query Unsuccesful");

if(mysqli_num_rows($result) > 0){ ?>
  <center>
<table>
  <tr>
    <th>Subject Name</th>
    <th>Student Name</th>
    <th>Student Marks</th>
  </tr>
  <tr>
  <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <td><?php $row['subject_name'] ?></td>
      <td><?php $row['student_name'] ?></td>
      <td><?php $row['student_marks'] ?></td>
  <?php } ?>
  </tr>
</table>
</center>
<?php
}
else{
  echo "No Results";
}
 ?>
