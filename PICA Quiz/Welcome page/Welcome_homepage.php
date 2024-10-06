<html>

<head>
  <title>Pica Online quiz</title>
  <link rel="stylesheet" href="http://localhost/PICA%20Quiz/CSS/login_css.css">
  <style>
    .homepage .Parul_logo img{
      width: 500px;
      height: 500px;
      padding: 100px;
    }

    body {
      background-image: url('https://wallpaperaccess.com/full/796832.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size:cover;
    }
  </style>
</head>

<body>
  <?php include 'Welcome_Header.php' ?>
  <div class="homepage">
    <div class="Parul_logo">
      <img src="http://localhost/PICA%20Quiz/images/pica_logo.jpg">
    </div>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="student()">Student</button>
          <button type="button" class="toggle-btn" onclick="faculty()">Faculty</button>
        </div>
          <form id="student" class="input-group" method="post" action="http://localhost/PICA%20Quiz/php/student_login_check.php">
            <input type="number" name="enroll" class="input-field" placeholder="Enrollment No" title="Enter your Enrollment No" required>
            <input type="password" name="pass" class="input-field" placeholder="Password" title="Enter the Password" required>
            New User ? <a href="http://localhost/PICA%20Quiz/login%20and%20register/Register_student.php" target="_self">Register</a>
            <button type="submit" class="submit-btn" name="login">Login</button>
          </form>
          <form id="faculty" class="input-group" method="post" action="http://localhost/PICA%20Quiz/php/faculty_login_check.php">
            <input type="number" class="input-field" placeholder="Faculty ID" title="Enter your Faculty ID." name="faculty_id" required>
            <input type="password" class="input-field" placeholder="Password"  title="Enter the Password." name="faculty_pass" required>
            <a href="#">Get Password?</a>
            <button type="submit" class="submit-btn" name="faculty_login">Login</button>
          </form>
    </div>
  </div>
</div>
</body>

</html>

<script>
  var x = document.getElementById("student");
  var y = document.getElementById("faculty");
  var z = document.getElementById("btn");

  function faculty(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
  }

  function student(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";
  }
</script>
