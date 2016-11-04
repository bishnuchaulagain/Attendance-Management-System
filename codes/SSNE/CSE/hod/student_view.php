
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
if((isset($_POST["year"]))  ){
	
	$year=$_POST["year"];
	
	
	if($year == "" ){
					$msg = "<font color=\"red\">All fields are required.</font>";

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
			<form method="post" action="student_view.php" name="regupdate">
			<table class="table table-bordered table-hover" width="500px">
			<caption align="center"><h3>View Students Details </h3></caption>
			<tbody>
				<th class="danger" colspan="3">View				
				</th>
	
				<tr>
			
					<td class="info" colspan="3"> 	
						<select name="year" class="form-control">
					<option value="">-- SELECT SEMISTER--</option>
								
			<option value="I-I">I-I</option>
			<option value="I-II">I-II</option>
			<option value="II-I">II-I</option>
			<option value="II-II">II-II</option>
			<option value="III-I">III-I</option>
			<option value="III-II">III-II</option>
			<option value="IV-I">IV-I</option>
			<option value="IV-II">IV-II</option>
			
						</select>
					</td>

				</tr>
				<tr>
					<td colspan="3" align="center" class="success">
						<input type="submit" class="btn btn-success" name="submit"	value="View">	
								<p>Note:<font color="red"> 1 indicates detained</font> | <font color="green"> 0 indicates not detained</font></p>	
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center" class="success">
						<?php echo $msg; ?>
					</td>
				</tr>
			</tbody>			
			</table>
			</form>
		 </div>
		</div>
	</body>
</html>
<?php

if((isset($_POST["year"]))  ){
	
	$year=$_POST["year"];
	
	
	if($year == "" ){
					$msg = "<font color=\"red\">All fields are required.</font>";

	}
	else{
	
	//view i i details 
	if($year == "I-I"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s1");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>I-I</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	// for 1-2 
	else if($year == "I-II"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s2  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>I-II</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	//for 2 1
	else if($year == "II-I"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s3  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>II-I</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	// 2 -2
	else if($year == "II-II"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s4  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>II-II</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	//3 -1
	else if($year == "III-I"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s5  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>III-I</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	//3-2
	else if($year == "III-II"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s6  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>III-II</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	// 4 - 1
	else if($year == "IV-I"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s7  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>IV-I</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	// 4- 2
	else if($year == "IV-II"){
		echo "<table class='table table-bordered table-hover'>
			<th class='danger'>Registered Id</th><th class='danger'>Name</th><th class='danger'>Year</th><th class='danger'>Section</th><th class='danger'>Detained Status</th>
		";
			$sql = mysql_query("SELECT * FROM s8  ");
			while($row = mysql_fetch_array($sql)){
				$id = $row["id"];
				$name = $row["sname"];
				$sec = $row["sec"];
				$ds = $row["detained"];
				
				echo "<tr> <td class='info'>$id</td>
				<td class='info'>$name</td>
				<td class='info'>IV-II</td>
				<td class='info'>$sec</td>
				<td class='info'>$ds</td></tr>";
				
			}
			echo "</table>";

	}
	
	//end of else indicating not null
 }
	
} 


?>
