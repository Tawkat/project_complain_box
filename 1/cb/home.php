<?php
require("api/session.php");
?>
<a href="home.php"><img src="img/home.png" /></a>
<br><br>
<center><h2>Welcome! <?php echo $_SESSION['USER_NAME'];?></h2></center><!-- -------------------------------------------------->
<br>
<a href="submit_complaint.php"><img src="img/submit.png" border="0" /></a>
<h4><a href="recent_complaint.php">Recent Complaint</a></h4>
<h4><a href="logout.php">Logout</a></h4>
