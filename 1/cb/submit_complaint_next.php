<?php
require("api/session.php");
require("api/config.php");
$ward = $_POST['ward'];
$place = $_POST['place'];
$road = $_POST['road'];
$type = $_POST['type'];
$title = $_POST['title'];
?>
<a href="home.php"><img src="img/home.png" /></a>
<table border="0" align="center">
  <tr>
    <td style="background-color:#FFFF00"><b>These problems look simillar to your problem type. Please check them before submitting</b><br /><br /></td>
  </tr>
  <tr>
    <td><div style="overflow:auto;height:360;">
		<?php
		$sql = "select * from complaint where ward='$ward' and place='$place' and road='$road' and type='$type'";
		$out = mysql_query($sql, $db);
		while($rows = mysql_fetch_array($out))
		{
			echo '<b style="color:#0033CC;">'.$rows['title'].'</b> <br>';
			echo '<img src="upload/'.$rows['id'].'.jpg" width="340" />';
			echo '<div align="justify">'.$rows['description'].'</div>';
			echo '<hr />';
		}
		?>
	</div></td>
  </tr>
  <tr>
    <td><form action="submit_complaint_final.php" method="post">
			<input name="ward" type="hidden" value="<?php echo $ward;?>" />
			<input name="place" type="hidden" value="<?php echo $place;?>" />
			<input name="road" type="hidden" value="<?php echo $road;?>" />
			<input name="type" type="hidden" value="<?php echo $type;?>" />
			<input name="title" type="hidden" value="<?php echo $title;?>" />
			<input type="submit" value="My problem did not match any of these. 
Continue Submission" style="text-align:center;background-color:#009900;width:100%;color:#FFFFFF"/>
			<input type="button" value="Abort Submission. Return home" style="text-align:center;background-color:#FF0000;width:100%;color:#FFFFFF;" onclick="location.href='home.php';"/>
		</form>
	</td>
  </tr>
</table>