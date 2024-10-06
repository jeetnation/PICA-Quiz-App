<?php
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/PICA%20Quiz/Welcome%20page/Welcome_homepage.php");
?>
