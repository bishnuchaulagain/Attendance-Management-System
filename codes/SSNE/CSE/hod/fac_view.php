
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
			<caption align="center"><h3>Faculty List</h3></caption>
			<tbody>
				<th class="danger">Name</th><th class="danger">Faculty ID</th>
				
				<?php
					
				//	echo  $yrs;
				//view the promoted list
					
						$sts = mysql_query("SELECT * FROM user where did='1'");
						while($row=mysql_fetch_array($sts)){
							$name = $row["fname"];
							$rid = $row["userId"];
							echo "<tr> <td class='info'>$name</td><td class='info'>$rid</td></tr>";
						}
					

				?>
				<tr> <td colspan="2" class="info"><a href="fac_subdetails.php">View Subject Details </a></td></tr>
			</tbody>			
			</table>
		

			</form>
		 </div>
		</div>
	</body>
</html>