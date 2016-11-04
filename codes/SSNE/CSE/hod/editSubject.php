
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
if((isset($_POST["sname"])) && (isset($_POST["year"]))  ){
	$sname = $_POST["sname"];
	$year = $_POST["year"];
	
	if($sname=="" && $year=="" ){
					$msg = "<font color=\"red\">All fields are required.</font>";

	}
	else{
	$uppername = strtoupper($sname);
	//new registration of the subject
	
					$sql = mysql_query("SELECT * FROM faculty where name='$uppername' ");
					$count = mysql_num_rows($sql);
				if($count){
					$sql1 = mysql_query("UPDATE  `faculty` SET `yr`='$year' where name='$uppername' ");
					if($sql1){
						$msg = "<font color=\"green\">Successfully Registered</font>";
					}
					
				}
				else{

					$msg = "<font color=\"red\">Sorry Subjects not registered</font>";
				}
	
	//end of else which indicates not null
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
			<form method="post" action="editSubject.php" name="regupdate">
			<table class="table table-bordered table-hover" width="500px">
			<caption align="center"><h3>Subject Edit </h3></caption>
			<tbody>
				<th class="danger" colspan="3">Select Subject Name and Select Year to Change				
				</th>
			<tr>
					<td class="info" colspan="3">
					
					<select name="sname" class="form-control">
						<option value="">SELECT THE SUBJECT </option>
						<?php 
							$sql = mysql_query("SELECT name FROM `faculty`");
							while($row = mysql_fetch_array($sql)){
								$sname = $row["name"];
								echo "<option value='$sname'>$sname</option>";
							}
						?>
					</select>
						</td>
			</tr>
				<tr>

					<td class="info" colspan="3"> 	
						<select name="year" class="form-control">
					<option value="">-- SELECT SEMISTER TO CHANGE--</option>
								
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
						<input type="submit" class="btn btn-success" name="submit"	value="Update Change">	
								
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