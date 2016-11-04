
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
			<caption align="center"><h3>Faculty - Students Details</h3></caption>
			<tbody>
				<th class="danger">Subject Name</th><th class="danger">Faclty Name</th><th class="danger">Year</th><th class="danger">Section</th>
				
				<?php
			
						$sts = mysql_query("SELECT * FROM facsub ORDER BY sem ASC");
						while($row=mysql_fetch_array($sts)){
							$fname = $row["names"];
							$sub = $row["subjects"];
							$yr = $row["sem"];
							$sec = $row["sec"];
							echo "<tr> <td class='info'>$sub</td><td class='info'>$fname</td><td class='info'>$yr</td><td class='info'>$sec</td>";
						}
					

				?>
			</tbody>			
			</table>
		

			</form>
		 </div>
		</div>
	</body>
</html>