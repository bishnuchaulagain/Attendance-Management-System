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
			<div class="hidden-print"><?php include("../include/hodmenu.txt");?></div>
			<table class="table table-hover">
				<th class="danger">Reg ID</th>
				<?php
					$sql = mysql_query("SELECT distinct(fac) as fac FROM a1 ");
					while($row = mysql_fetch_array($sql)){
						$sub=$row["fac"];
						echo "<th class=\"danger\">$sub</th>";
					}
				
				?>
				<th class="danger">Total</th><th class="danger">Total Present </th><th class="danger">Percent</th>
		
			<?php
				$id="";
		
				$sql1 = mysql_query("select distinct(id) from a1");
				while($row = mysql_fetch_array($sql1)){
					$id = $row["id"];
					echo "<tr><td class='active'>$id</td>";
				}

			?>
				</table>
	</div>
	</body>
</html>