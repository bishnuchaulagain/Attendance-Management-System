
<?php
session_start();

include ("../include/connect.php");
     if(!isset($_SESSION["did"])){
       header("location:../index.php");
     }
	 else{
	
	   $check_did = $_SESSION["did"];
		if($check_did !=2){
			 header("location:../index.php");
		}
	}
	
$msg ="";
if((isset($_POST["from"])) && (isset($_POST["to"]))){
	$from = $_POST["from"];
	$to = $_POST["to"];
	//upgrade form 1-1 to 1-2
	if($from == "i-i" && $to =="i-ii"){
					$sql = mysql_query("SELECT * FROM s1 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s2` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'I-II', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s1` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=I-II\">View Promoted List</a></font>";
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 1-2 to 2-1
	else if($from == "i-ii" && $to =="ii-i"){
					$sql = mysql_query("SELECT * FROM s2 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s3` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'II-I', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s2` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=II-I\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 2-1 to 2-2
	else if($from == "ii-i" && $to =="ii-ii"){
					$sql = mysql_query("SELECT * FROM s3 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s4` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name', '$ids', 'II-II', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s3` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=II-II\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 2-2 to 3-1
	else if($from == "ii-ii" && $to =="iii-i"){
					$sql = mysql_query("SELECT * FROM s4 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s5` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'III-I', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s4` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=III-I\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 3-1 to 3-2
	else if($from == "iii-i" && $to =="iii-ii"){
					$sql = mysql_query("SELECT * FROM s5 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s6` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'III-II', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s5` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=III-II\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 3-2 to 4-1
	else if($from == "iii-ii" && $to =="iv-i"){
					$sql = mysql_query("SELECT * FROM s6 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s7` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'IV-I', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s6` WHERE `detained` !='1'");
					if($drop){
					$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=IV-I\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	//upgrade form 4-1 to 4-2 
	else if($from == "iv-i" && $to =="iv-ii"){
					$sql = mysql_query("SELECT * FROM s7 where detained != '1' ");
				if($sql){
					while($row = mysql_fetch_array($sql)){
						$ids = $row["id"];
						$section = $row["sec"];
						$name = $row["sname"];
						$sql1 = mysql_query("INSERT INTO `s8` (`sname`,`id`, `sem`, `detained`,`sec`) VALUES ('$name','$ids', 'IV-II', '0','$section')");
					
					}
					$drop=mysql_query( "DELETE FROM `s7` WHERE `detained` !='1'");
					if($drop){
						$msg = "<font color=\"green\">Successfully Promoted<a href=\"viewpromoted.php?yr=IV-II\">View Promoted List</a></font>";
					
					}
				}
				else{
					$msg = "<font color=\"red\">Sorry can't be promoted</font>";
				}
	}
	else{
			$msg = "<font color=\"red\">Select appropriate Paramater for Promotion</font>";
	}
} 
?>
<?php
$msg1="";
//Clearing the records of passout students
if(isset($_POST["clearAll"])){
				$drop=mysql_query( "DELETE FROM `s8` WHERE `detained` !='1'");
				if($drop){
					$msg1 = "<font color=\"green\">Successfully Cleared</font>";
				}
				else{
					$msg1 = "<font color=\"red\">Sorry can't be cleared</font>";
				}
}


?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<title>
			SSN College OF Engineering & Technology :: Attendance System
		</title>
	</head>
	<body>
		<div class="container" align="center">
			<div class="head pull-left">
				<h2 class="pull-left">SSN<small>&nbsp;&nbsp;College of Engineering & Technology</small></h2>
			</div>
			<hr class="horline" width="100%" /> 
			<div><?php include("../include/hodmenu.txt");?></div>
			<br/>
			<div class="promote">
			<form method="post" action="promote.php" name="regupdate">
			<table class="table table-bordered table-hover" width="400px">
			<caption align="center"><h3>Promote Students </h3></caption>
			<tbody>
				<th class="danger">Promote From				
				</th>
				<th class="danger">
					Promote To
				</th>
				<tr>
					<td class="active">	
						<select name="from" class="form-control">
					<option>-- From --</option>
					<option value="i-i">I-I</option>
					<option value="i-ii">I-II</option>
					<option value="ii-i">II-I</option>
					<option value="ii-ii">II-II</option>
					<option value="iii-i">III-I</option>
					<option value="iii-ii">III-II</option>
					<option value="iv-i">IV-I</option>
					<option value="iv-ii">IV-II</option>
						</select>
					</td>
					<td class="info"> 	
						<select name="to" class="form-control">
					<option>-- To --</option>
					<option value="i-i">I-I</option>
					<option value="i-ii">I-II</option>
					<option value="ii-i">II-I</option>
					<option value="ii-ii">II-II</option>
					<option value="iii-i">III-I</option>
					<option value="iii-ii">III-II</option>
					<option value="iv-i">IV-I</option>
					<option value="iv-ii">IV-II</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Promote">	
								<p>Note: To detain the Students <a href="detain.php">Click here</a></p>	
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="success">
						<?php echo $msg; ?>
					</td>
				</tr>
			</tbody>			
			</table>
			</form>
			<form method="post" action="promote.php">
			<table class="table table-bordered table-hover">
			<caption><h3>Clear Passout Student Details</h3></caption>
			<tbody>
							<th class="danger" colspan="2">
							Clear 4-2 List for Passout
				</th>
				<tr>
					<td colspan="2" align="center" class="success">
						<input type="checkbox" name="clearAll">Clear All</input>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="Clear">	
								
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" class="success">
						<?php echo $msg1; ?>
					</td>
				</tr>
			</tbody>
			</table>
			</form>
		 </div>
		</div>
	</body>
</html>