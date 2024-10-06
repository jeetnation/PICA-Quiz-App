<?php
$subject_name = $_POST['subjects'];
session_start();
$_SESSION['subject_no'] = $subject_name;
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  $(document).ready(function(e)
  {
    //Vairables
    var html = '<p /> <div>Question:<textarea name="question[]" id="childquestion" required></textarea> Option 1:<input type="text" name="op1[]" id="childop1" required/> Option 2:<input type="text" name="op2[]" id="childop2" required/> Option 3:<input type="text" name="op3[]" id="childop3" required/> Option 4:<input type="text" name="op4[]" id="childop4" required/> Answer:<input type="number" name="ans[]" id="childans" max="4" min="1" required/> <input type="button" id="remove" value="X"/> </div>';


    //add rows to form
    $("#add").click(function(e)
    {
      $("#container").append(html);
    });

    //remove rows from contactForm
    $("#container").on('click','#remove',function(e)
    {
      $(this).parent('div').remove();
    });

  });
  </script>
</head>

<body>
  <form method="post" action="http://localhost/PICA%20Quiz/php/insert_quiz_php.php">
    <h2>Create Quiz of Subject: <input type="text"  name="subject_num" value="<?php echo "$subject_name" ?>"  readonly /></h2>
    <div id="container">
      Question:<textarea name="question[]" id="question" required></textarea>
      Option 1:<input type="text" name="op1[]" id="op1" required/>
      Option 2:<input type="text" name="op2[]" id="op2" required/>
      Option 3:<input type="text" name="op3[]" id="op3" required/>
      Option 4:<input type="text" name="op4[]" id="op4" required/>
      Answer:<input type="number" name="ans[]" id="ans" max="4" min="1" required/>
      <input type="button" id="add" value="Add More"/>
    </div>
    <input type="submit" name="submit"/>
  </form>
</body>

</html>
