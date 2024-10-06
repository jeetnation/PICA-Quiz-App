<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "pica_quiz";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

  $SQL =  "SELECT subject_name, subject_no FROM subject_table";

  $result = mysqli_query($conn, $SQL) or die("Query Failed");
  ?>
<html>
<head>

</head>
<body>
  <div>
    <?php include 'faculty_header.php';?>
  </div>
  <center>
  <form action="http://localhost/PICA%20Quiz/faculty_side/create_quiz.php" method="post">
    <select name="subjects">
      <?php
      while($row = mysqli_fetch_assoc($result))
      {
          $subject_name = $row['subject_name'];
          $subject_no = $row['subject_no'];
          echo "<option value='$subject_no'>$subject_name</option>";
      }
    ?>
    </select>
    <br/>
    <input type="submit" name="submit" value="create">
  </form>
  </center>
</body>

</html>
