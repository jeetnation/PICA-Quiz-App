<html>

<head>
  <title>Student Registration</title>
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  body {
    background-image: url('https://wallpaperaccess.com/full/796832.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }

  .regform{
    width: 800px;
    background-color: rgb(0,0,0,6);
    margin: auto;
    color: #FFFFFF;
    padding: 10px 0px 10px 0px;
    text-align: center;
    border-radius: 15px 15px 0px 0px;
  }

  .main{
    background-color: rgp(0, 0, 0, 0.5);
    width: 800px;
    margin: auto;
  }

  form{
    padding: 10px;
  }

  #name{
    width: 100%;
    height: 61px;
  }

  .name{
    margin-left: 25px;
    margin-top: 30px;
    width: 125px;
    color: white;
    font-size: 18px;
    font-weight: 700px;
  }

  .firstname{
    position: relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
  }

  .lastname{
    position: relative;
    left: 417px;
    top: -80px;
    line-height: 40px;
    border-radius: 6px;
    padding: 0 41px;
    color: #555;
  }

  .firstlable, .lastlable{
    position: relative;
    color: #E5E5E5;
    text-transform: capitalize;
    font-size: 14px;
    left: 203px;
    top: -45px;
  }

  .enrollment-no, .course, .semester, .email, .phone_no, .pass{
    position:relative;
    left: 200px;
    top: -37px;
    line-height: 40px;
    width: 532px;
    border-radius: 6px;
    padding: 0 22px;
    font-size: 16px;
  }

  .register{
    background-color: #3BAF4F;
    display: block;
    margin: 20px 0 0 310px;
    text-align: center;
    border: 2px solid #366473;
    padding: 14px 110px;
    outline: none;
    color: white;
    cursor: pointer;
    transition: 0.25px;
  }

  .register:hover{
    background-color: #5390F5;
  }

  </style>
</head>

<body>
  <div class="regform">
    <h1>Student Registration Form</h1>
  </div>
      <div class="main">
        <form action="http://localhost/PICA%20Quiz/php/register_insert.php" method="post">
          <div id="name">
            <h2 class="name">Name</h2>
            <input class="firstname" type="text" name="first_name" required><br/>
            <lable class="firstlable">First Name</lable>
            <input class="lastname" type="text" name="last_name" required>
            <lable class="lastlable">Last Name</lable>
          </div>
        <h2 class="name">Enrollment No</h2>
        <input class="enrollment-no" type="number" name="enrollment" required>

        <h2 class="name">Course</h2>
        <select class="course" name="course" required>
          <option value="">-Select Course-</option>
          <option value="BCA">BCA</option>
          <option value="IMCA">IMCA</option>
        </select>

        <h2 class="name">Semester</h2>
        <select class="semester" name="semester" required>
          <option value="">-Select Semester-</option>
          <option value="1">Sem-1</option>
          <option value="2">Sem-2</option>
          <option value="3">Sem-3</option>
          <option value="4">Sem-4</option>
          <option value="5">Sem-5</option>
          <option value="6">Sem-6</option>
        </select>

        <h2 class="name">Email Id:</h2>
        <input class="email" type="email" name="email" required>

        <h2 class="name">Phone No:</h2>
        <input class="phone_no" type="number" name="phone_no" required titile="Enter your Parul Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
        <h2 class="name">Set Password:</h2>
        <input class="pass" type="password" name="student_password" required maxlength="10">

        <button class="register" type="submit" name="register">Register</button>
      </form>
    </div>
</body>

</html>
