
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
		
			<table class="table table-bordered table-hover" width="400px">
			<caption align="center"><h3>Promoted Students Details</h3></caption>
			<tbody>
				<th class="danger">Name</th><th class="danger">Registration ID</th><th class="danger">Status</th><th class="danger">Year</th>
				
				<?php
					$yrs = $_GET["yr"];
				//	echo  $yrs;
				//view the promoted list
					if($yrs == "I-II"){
						$sts = mysql_query("SELECT * FROM s2");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>I-II</td>";
						}
					}
					else if($yrs == "II-I"){
						$sts = mysql_query("SELECT * FROM s3");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>II-I</td>";
						}
					}
					else if($yrs == "II-II"){
						$sts = mysql_query("SELECT * FROM s4");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>II-II</td>";
						}
					}
					else if($yrs == "III-I"){
						$sts = mysql_query("SELECT * FROM s5");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>III-I</td>";
						}
					}
					else if($yrs == "III-II"){
						$sts = mysql_query("SELECT * FROM s6");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>III-II</td>";
						}
					}
					else if($yrs == "IV-I"){
						$sts = mysql_query("SELECT * FROM s7");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>IV-I</td>";
						}
					}
					else if($yrs == "IV-II"){
						$sts = mysql_query("SELECT * FROM s8");
						while($row=mysql_fetch_array($sts)){
							$name = $row["sname"];
							$rid = $row["id"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td><td class='info'>Promoted</td><td class='info'>IV-II</td>";
						}
					}
				?>
			</tbody>			
			</table>
		

			</form>
		 </div>
		</div>
	</body>
</html>