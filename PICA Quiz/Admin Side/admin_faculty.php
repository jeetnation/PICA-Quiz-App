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
        <th>Faculty Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email id</th>
        <th>Phone No</th>
      </tr>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pica_quiz";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection failed");

      $SQL = "SELECT * FROM faculty_table";
      $result = mysqli_query($conn, $SQL) or die("Query Unsuccesful");
      if (mysqli_num_rows($result) > 0)
      {

        while($row = mysqli_fetch_assoc($result))
        {
         echo "<tr><td>".$row['faculty_id']."</td> <td>".$row['f_name']."</td><td>".$row['l_name']."</td><td>".$row['email']."</td><td>".$row['phone_no']."</td></tr>";
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
