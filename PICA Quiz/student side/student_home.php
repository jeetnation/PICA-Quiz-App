<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'student_header.php'; ?>
    <center>
    <h1> Selet subject to Give Quiz</h1>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pica_quiz";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

      $Semester = $_SESSION['Sem'];

      $SQL =  "SELECT subject_name FROM subject_table WHERE subject_semester='{$Semester}'";

      $result = mysqli_query($conn, $SQL) or die("query failed");

      ?>
      <form action="http://localhost/PICA%20Quiz/student%20side/Quiz.php" method="post">
    <select name="subject">
      <?php
      while($row = mysqli_fetch_assoc($result)){
        $subject_name = $row['subject_name'];
        echo "<option value='$subject_name'>$subject_name</option>";
      }
      ?>
    </select>
    <input type="submit" name="submit" value="Select Subject">
  </form>
  </center>
  </body>
</html>
