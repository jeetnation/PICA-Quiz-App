<?php
if(isset($_POST['submit']))
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "pica_quiz";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");


  $sub_name = $_POST['subject'];

  $SQL = "SELECT * FROM subject_table WHERE subject_name='{$sub_name}'";
  $result = mysqli_query($conn, $SQL) or die("Query Unsuccesful");

  if (mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
     session_start();
     $_SESSION['sub_name'] = $row['subject_name'];
     $_SESSION['sub_no'] = $row['subject_no'];
     $_SESSION['sub_code'] = $row['subject_code'];
    }
  }
  else
  {
    echo "No Records";
  }

  $sql = "SELECT * FROM quiz_table WHERE question_no LIKE '{$_SESSION['sub_no']}%'";
  $RESULT = mysqli_query($conn, $sql) or die("Quesry Unessfiull");

if (mysqli_num_rows($RESULT) >0)
{
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://localhost/PICA%20Quiz/CSS/quiz_css.css">
  </head>

  <body>
    <header>
      <div class="container">
        <p>Quiz on <?php echo $_SESSION['sub_name'] ?></p>
      </div>
    </header>
    <main>
      <div class="container">
          <h2>Test your knowladge on <?php echo $_SESSION['sub_name'] ?></h2>
          <p>
            This is an MCQ type Quiz to test your skills
          </p>
          <ul>
            <li><strong>Total Number of Question: </strong>10</li>
            <li><strong>Type: </strong>MCQ</li>
            <li><strong>Estimated Time: </strong> 5 minutes</li>
          </ul>

          <a href="http://localhost/PICA%20Quiz/student%20side/giving_Quiz.php" class="start">Start Quiz</a>
      </div>
    </main>
  </body>
</html>
<?php
}
else
{
  echo "Exam not Created";
}
}
?>
