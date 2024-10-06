<?php
session_start();
$_SESSION['marks'] = 0;
$servername = "localhost";
$username = "root";
$password = "";
$database = "pica_quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <?php
      $SQL = "SELECT * FROM quiz_table WHERE question_no LIKE '{$_SESSION['sub_no']}%' ORDER BY rand() LIMIT 10 ";
      $result = mysqli_query($conn, $SQL) or die("Query not Possible");
?>
<form method="post" action="giving_Quiz.php">
  <table>
    <tr>
      <th>Question</th>
      <th>Option 1</th>
      <th>Option 2</th>
      <th>Option 3</th>
      <th>Option 4</th>
      <th>Answer</th>
    </tr>
  <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $row['question'];?></td>
      <td><?php echo $row['option_1'];?></td>
      <td><?php echo $row['option_2'];?></td>
      <td><?php echo $row['option_3'];?></td>
      <td><?php echo $row['option_4'];?></td>
      <td><input type="number" name="Answer[]"  placeholder="Enter Answer" required/></td>
      <td><input type="hidden" name="ans[]" value="<?php echo $row['answer']; ?>"</td>
    </tr>
   <?php } ?>
 </table>
  <input type="submit" name="submit" value="..Submit Quiz.."/>
   </form>
   </center>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
$_SESSION['result'] = 0;
$userdata = count($_POST['Answer']);

if($userdata > 0)
{
  for($i=0; $i < $userdata; $i++)
  {
    if($_POST['Answer'][$i] == $_POST['ans'][$i])
    {
      $_SESSION['result'] = $_SESSION['result'] + 10;
    }
  }
  }
  header("Location:http://localhost/PICA%20Quiz/student%20side/resultstudent.php");
}

 ?>
