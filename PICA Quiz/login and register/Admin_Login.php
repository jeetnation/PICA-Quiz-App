<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/PICA%20Quiz/CSS/admin_login_css.css">
    <title>Admin Login</title>
  </head>
  <body>
    <?php include 'http://localhost/PICA%20Quiz/Welcome%20page/Welcome_Header.php'; ?>
    <div class="contact-form">
      <h2>Admin Login</h2>
      <form action="http://localhost/PICA%20Quiz/php/check_admin_login.php" method="post">
        <p>Admin ID</p>
        <input type="number" name="a_id" placeholder="Enter Id...">
        <p>Admin Password</p>
        <input type="password" name="a_pass" placeholder="Enter Password">
        <input type="submit" name="a_login" value="LOG IN">
      </form>
    </div>
  </body>
</html>
