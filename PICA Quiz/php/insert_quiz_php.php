<?php
if(isset($_POST['submit']))
{
  include 'database_connect.php';
  session_start();

  $SQL = "SELECT subject_name FROM subject_table WHERE subject_no = '{$_SESSION['subject_no']}' ";
  $result = mysqli_query($conn, $SQL);

  while($row = mysqli_fetch_assoc($result)){
    $subject_name = $row['subject_name'];
  }

  $userdata = count($_POST['question']);

  if($userdata > 0)
  {
    for($i=0; $i < $userdata; $i++)
    {
      $temp = $i;
      $temp++;
      $question_no = $_POST['subject_num'].$temp;

      $question_n = $_POST['question'][$i];
      $option1 = $_POST['op1'][$i];
      $option2 = $_POST['op2'][$i];
      $option3 = $_POST['op3'][$i];
      $option4 = $_POST['op4'][$i];
      $answer = $_POST['ans'][$i];

      $query = "INSERT INTO quiz_table (subject_name, question_no, question, option_1, option_2, option_3, option_4, answer)  VALUES ('{$subject_name}', '{$question_no}', '{$question_n}', '{$option1}', '{$option2}', '{$option3}', '{$option4}', '{$answer}')";
      $insert = mysqli_query($conn, $query) or die("Query Unsuccessful");
    }
  }
  $conn->close();
  header("Location:http://localhost/PICA%20Quiz/faculty_side/select_subject.php")
}
?>
