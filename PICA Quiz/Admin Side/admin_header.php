<?php session_start();  ?>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/PICA%20Quiz/CSS/session_header_css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="dropdwn">
		<nav>
			<img class="logo" src="http://localhost/PICA%20Quiz/images/pica_logo.jpg">
			<ul>
				<li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_home.php">Home</a></li>
				<li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_quiz.php">Quiz</a></li>
        <li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_students.php">Students</a></li>
        <li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_faculty.php">Faculty</a></li>
        <li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_feedback.php">Feedback</a></li>
				<li><a href="#"><?php echo $_SESSION['first_name']." ".$_SESSION['last_name']; ?> <i class="fa fa-sort-desc" style="font-size:24px"></i></a>
					<ul>
							<li><a href="http://localhost/PICA%20Quiz/Admin%20Side/admin_myaccount.php">My Account</a></li>
							<li><a href="http://localhost/PICA%20Quiz/php/logout_session.php">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</body>

</html>
