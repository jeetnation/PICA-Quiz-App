
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
				<li><a href="http://localhost/PICA%20Quiz/faculty_side/select_subject.php">Home</a></li>
				<li><a href="http://localhost/PICA%20Quiz/faculty_side/edit_quiz.php">Edit Quiz</a></li>
				<li><a href="http://localhost/PICA%20Quiz/faculty_side/results.php">Results</a></li>
				<li><a href="#"><?php echo $_SESSION['f_name']." ".$_SESSION['l_name']; ?> <i class="fa fa-sort-desc" style="font-size:24px"></i></a>
					<ul>
							<li><a href="http://localhost/PICA%20Quiz/faculty_side/my_acount_page.php">My Account</a></li>
							<li><a href="http://localhost/PICA%20Quiz/php/logout_session.php">Log Out</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</body>

</html>
