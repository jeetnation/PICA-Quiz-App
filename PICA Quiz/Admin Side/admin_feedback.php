<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}

}
    </style>
  </head>
  <body>
    <?php include 'admin_header.php'; ?>
<div>
  <center>
    <table>
      <tr>
        <th>Feedback No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pica_quiz";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

      $SQL = "SELECT * FROM feedback_table";
      $result = mysqli_query($conn, $SQL) or die("Query Unsuccesful");

      if (mysqli_num_rows($result) > 0)
      {

        while($row = mysqli_fetch_assoc($result))
        {
         echo "<tr><td>".$row['feed_no']."</td> <td>".$row['feed_name']."</td><td>".$row['feed_email']."</td><td>".$row['feed_message']."</td></tr>";
        }
      }
      else{
        echo "No Reoreds";
      }
       ?>
    </table>
  </center>
</div>
  </body>
</html>
